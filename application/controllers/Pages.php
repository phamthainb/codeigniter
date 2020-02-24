<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Load Dependencies

	}
	// List all your items
	public function index() {
		$this->load->view('index');
	}

	// Add a new item
	public function add() {

	}

}

/* End of file pages_controller.php */
/* Location: .//opt/lampp/htdocs/codeigniter/controllers/pages_controller.php */

?>