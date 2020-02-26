<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index() {
		$this->load->view('admin/index');
	}

	// load pages
	public function loadPages($param) {
		// echo $param;

		$adminPages = ['product-add', 'product-list', 'product-checkout'];

		$targetPage = "admin/" . $param;
		// $result['results'] = "";

		switch ($param) {
		case 'product-add':{
				$result['results'] = 'no submit';
				$this->load->view('admin/product-add', $result);
				break;
			}
		case 'product-list':{
				$this->load->model('AdminModels');
				$dataProduct['dataProduct'] = $this->AdminModels->getProductFromDatabase(array());
				$this->load->view($targetPage, $dataProduct);
				break;
			}
		case 'product-checkout':{

				$this->load->view($targetPage);
				break;
			}

		default:
			// code...
			break;
		}

	}

	//add one item
	public function addProduct() {

		// sent data product to model Admin
		$this->load->model('AdminModels');
		$results = $this->AdminModels->addProductToDatabase();
		$result['results'] = $results;
		$this->load->view('admin/product-add', $result);
		// echo $result, $mess_notice;

		header('Location: loadPages/product-add');
		exit;
	}

	//getProduct one item // using ajax for call getProduct
	public function getProduct() {
		// print_r($this->input->post('filter'));
		$filter = $this->input->post('filter');
		// print_r($filter);
		// die();
		/// call model for get product with filter value
		$this->load->model('AdminModels');
		$this->AdminModels->getProductFromDatabase($filter);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */

?>
