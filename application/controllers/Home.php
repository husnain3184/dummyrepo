<?php

class home extends CI_Controller {

	public function index()
	{

		$this->load->model('homeuser');
		$data['user'] = $this->homeuser->getusre();

		$this->load->view('hom_index',$data);


		}
}

