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
	// public function loadPages($param) {
	// 	// echo $param;

	// 	$adminPages = ['product-add', 'product-list', 'product-checkout'];

	// 	$targetPage = "admin/" . $param;
	// 	// $result['results'] = "";

	// 	switch ($param) {
	// 	case 'product-add':{
	// 			$result['results'] = 'no submit';
	// 			$this->load->view('admin/product-add', $result);
	// 			break;
	// 		}
	// 	case 'product-list':{
	// 			$this->load->model('AdminModels');
	// 			// $dataProduct['dataProduct'] = $this->AdminModels->getProductFromDatabase(array(), 1);
	// 			$this->load->view($targetPage);
	// 			break;
	// 		}
	// 	case 'product-checkout':{

	// 			$this->load->view($targetPage);
	// 			break;
	// 		}
	// 	default:
	// 		// code...
	// 		break;
	// 	}

	// }

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

	//pagination of admin list product
	public function pagination() {
		// load db and model
		$this->load->database();
		$this->load->model('AdminModels');
		// load Pagination, URL helper library
		$this->load->library('pagination');
		$this->load->helper('url');

		// init params
		$params = array();
		$limit_per_page = 3;
		$page = ($this->uri->segment(3)) ? ($this->uri->segment(3) - 1) : 0;

		// if isset filter
		if (isset($_GET['filter'])) {
			$total_records = $this->AdminModels->get_total(($_GET['filter']));

			if ($total_records > 0) {
				// get current page records
				$params["results"] = $this->AdminModels->get_current_page_records($limit_per_page, $page * $limit_per_page, ($_GET['filter']));
			}
		} else {
			$total_records = $this->AdminModels->get_total('no filter');
			$params["results"] = $this->AdminModels->get_current_page_records($limit_per_page, $page * $limit_per_page, "no filter");
		}

		$config['base_url'] = base_url() . 'index.php/admin/pagination';
		$config['total_rows'] = $total_records;
		$config['per_page'] = $limit_per_page;
		$config["uri_segment"] = 3;

		// pagination paging configuration
		$config['num_links'] = 2;
		$config['use_page_numbers'] = TRUE;
		$config['reuse_query_string'] = TRUE;

		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';

		$config['first_link'] = 'First Page';
		$config['first_tag_open'] = '<span class="firstlink">';
		$config['first_tag_close'] = '</span>';

		$config['last_link'] = 'Last Page';
		$config['last_tag_open'] = '<span class="lastlink">';
		$config['last_tag_close'] = '</span>';

		$config['next_link'] = 'Next Page';
		$config['next_tag_open'] = '<span class="nextlink">';
		$config['next_tag_close'] = '</span>';

		$config['prev_link'] = 'Prev Page';
		$config['prev_tag_open'] = '<span class="prevlink">';
		$config['prev_tag_close'] = '</span>';

		$config['cur_tag_open'] = '<span class="curlink">';
		$config['cur_tag_close'] = '</span>';

		$config['num_tag_open'] = '<span class="numlink">';
		$config['num_tag_close'] = '</span>';

		// initialize
		$this->pagination->initialize($config);
		// build paging links
		$params["links"] = $this->pagination->create_links();

		$this->load->view('admin/product-list', $params);
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */

?>
