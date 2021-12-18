<?php
/**
 * Created by PhpStorm.
 * User: Edwin
 * Date: 15/09/2018
 * Time: 14:03
 */

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Hook_sesion
{

	private $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		!$this->ci->load->library('session') ? $this->ci->load->library('session') : false;
		!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : false;
	}

	public function check_login()
	{
		$activo = $this->ci->session->userdata("ses");
		$seg = $this->ci->uri->segment(1);
		if($activo) {
			if($seg) {
				//var_dump($seg);
				//var_dump($this->ci->session->userdata("ses"));
				switch ($seg) {
					case 'Login':
						redirect(base_url("Principal"));
				}
			} else {
				redirect(base_url("Principal"));
			}
		} else {
			if($seg && $seg!='Login') {
				redirect(base_url());
			}
		}
	}
}
