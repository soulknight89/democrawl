<?php

	class Url_model extends CI_Model
	{
		/**
		 * Create url
		 * @param $data
		 * @return int|string
		 */
		public function create($data)
		{
			$this->db->insert("url", $data);
			if ($this->db->insert_id()) {
				return $this->db->insert_id();
			} else {
				return 'error';
			}
		}

		/**
		 * Create url
		 * @param $id
		 * @param $data
		 * @return boolean
		 */
		public function update($id, $data)
		{
			$this->db->update("url", $data);
			$this->db->where('id',$id);
			return true;
		}

		/**
		 * Get by short url
		 * @return array
		 */
		public function getByUrl($url)
		{
			$this->db->select('*');
			$this->db->from('url');
			$this->db->where('url', $url);

			return $this->db->get()->row();
		}

		/**
		 * Create url
		 * @param $data
		 * @return int|string
		 */
		public function insertRecord($data)
		{
			$this->db->insert("url_count", $data);
			if ($this->db->insert_id()) {
				return $this->db->insert_id();
			} else {
				return 'error';
			}
		}

		/**
		 * Get TOP 100 Views
		 * @return array|string
		 */
		public function getTop()
		{
			$this->db->select('pa.url, pa.destiny as site, count(uc.id) as views');
			$this->db->from("url_count uc");
			$this->db->join("url pa",'uc.idurl = pa.id','left');
			$this->db->group_by('pa.id');

			return $this->db->get()->result();
		}

		/**
		 * Get url no title
		 * @return array|string
		 */
		public function getNoTitle()
		{
			$this->db->select('*');
			$this->db->from("url");
			$this->db->where('title',null);

			return $this->db->get()->result();
		}
	}

