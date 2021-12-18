<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Url extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Url_model');
	}

	public function index($param = null)
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			//create shortest URL
			echo $this->create();
		} else {
			echo 'Only POST method';
		}
	}

	public function create()
	{
		if ($this->input->post('url')) {
			$data['destiny'] = $this->input->post('url');
			$data['title'] = NULL;
			$success = false;
			$charMap = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
			$try = 0;
			while ($success == false) {
				$try++;
				if ($try < 10) {
					$data['url'] = $charMap[rand(0, strlen($charMap) - 1)];
				} else if ($try < 100) {
					$data['url'] = $charMap[rand(0, strlen($charMap) - 1)] . $charMap[rand(0, strlen($charMap) - 1)];
				} else if ($try < 100) {
					$data['url'] = $charMap[rand(0, strlen($charMap) - 1)] . $charMap[rand(0, strlen($charMap) - 1)] . $charMap[rand(0, strlen($charMap) - 1)];
				}
				$get = $this->Url_model->getByUrl($data['url']);
				if(!$get) {
					$success = $this->Url_model->create($data);
					if ($success) {
						return $_SERVER['HTTP_HOST'].'/short/url/getUrl/'.$data['url'];
					}
				}
			}
		}
		return false;
	}

	public function getUrl($url) {
		$data = $this->Url_model->getByUrl($url);
		if($data) {
			$this->Url_model->insertRecord(['idUrl' => $data->id, 'datetime' => date('Y-m-d H:i:s')]);
			header('Location: ' . $data->destiny);
		} else {
			echo 'URL not included in query';
		}
	}

	public function getTopSites() {
		$data = $this->Url_model->getTop();
		header('Content-Type: application/json; charset=utf-8');
		if($data) {
			echo json_encode(['msg' => 'Sites', 'data' => $data]);
		} else {
			echo json_encode(['msg' => 'No records found']);
		}
	}

	public function crawl() {
		$data = $this->Url_model->getNoTitle();
		if($data) {
			foreach ($data as $detail) {
				$title = $this->getTitle($detail->destiny);
				$this->Url_model->update($detail->id,['title' => $title]);
			}
		}
		header('Content-Type: application/json; charset=utf-8');
		echo json_encode(['msg' => 'Job done']);
	}

	private function getTitle($url) {
		$page = file_get_contents($url);
		return preg_match('/<title[^>]*>(.*?)<\/title>/ims', $page, $match) ? $match[1] : null;
	}
}
