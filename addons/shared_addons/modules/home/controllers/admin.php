<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @author Brayan Acebo
 */
class Admin extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('registro_model');
	}

    /**
     * List all registers
     */

    public function index()
    {
    	$data = $this->registro_model->get_all();

    	$this->template
    	->set('data', $data)
    	->build('admin/index');
    }

}