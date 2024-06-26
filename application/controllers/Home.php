<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 function __construct()
	{
		parent::__construct();

		date_default_timezone_set('Asia/Jakarta');

		$this->load->model('data_model');
	}

	public function index()
	{
		$data = array(
			'lat' => $this->data_model->getLat(),
			'long' => $this->data_model->getLong(),
			'all_data' => $this->data_model->get_all_data(),
		);
		$this->load->view('landing/home', $data);
	}


	public function data_masjid()
	{
		$data['list'] = $this->data_model->get_data('data_masjid')->result();
		$this->load->view('landing/data_masjid', $data);
	}

	public function detail_masjid($id)
    {
		$where = array(
			'id_masjid' => $id
		);
		$data['detail'] = $this->data_model->edit_data($where, 'data_masjid')->result();
        $this->load->view('landing/detail', $data);
    }


}
