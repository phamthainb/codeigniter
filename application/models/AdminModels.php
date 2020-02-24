<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class AdminModels extends CI_Model {

	private $variable;

	public function __construct() {
		parent::__construct();

	}
	public function addProductToDatabase($product) {
		// echo 'addProductToDatabase';
		// print_r($product);

	}
}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */
?>