<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trangchu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cfs');

	}
	public function index()
	{
		$data['title'] = 'Confessions';
		$this->load->view('trangchu', $data);
		$mess = $this->input->post('mess');
		if(!empty($mess)){
			$this->cfs->up_cfs_to_db($mess);
	
		}
        
    }
 }

/* End of file Trangchu.php */
/* Location: ./application/controllers/Trangchu.php */