<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

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
	function __construct(){
        parent::__construct();
		$this->load->database();
        $this->load->library('grocery_CRUD');

	}

	public function index(){
		$this->load->view('welcome_message');
	}

    public function scenarios(){
        $crud = new grocery_CRUD();
        $crud->set_table('criss_scenarios');
        $output = $this->grocery_crud->render();
        $this->_preview($output);
    }

    function _preview($output = null){
        $this->load->view('view_test.php',$output);
    }

}
