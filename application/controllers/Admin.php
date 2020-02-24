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

	// Add a new item
	public function loadPages($param) {
		// echo $param;

		$adminPages = ['product-add', 'product-list', 'product-checkout'];

		$targetPage = "admin/" . $param;
		$this->load->view($targetPage);
	}

	//add one item
	public function addProduct() {
		// echo 'add product \n';

		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["product_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["product_image"]["tmp_name"]);
			if ($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
// Check file size
		if ($_FILES["product_image"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
// Allow certain file formats
		if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif") {
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
				echo "The file " . basename($_FILES["product_image"]["name"]) . " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}

		// create $product save infomation of product
		$product = array();
		$product['product_name'] = $this->input->post('product_name');
		$product['product_price'] = $this->input->post('product_price');
		$product['product_image'] = base_url() . "uploads/" . basename($_FILES["product_image"]["name"]);
		$product['product_discount'] = $this->input->post('product_discount');
		$product['product_point'] = $this->input->post('product_point');
		$product['product_inventory'] = $this->input->post('product_inventory');
		$product['product_size'] = $this->input->post('product_size');
		$product['product_detail'] = $this->input->post('product_detail');
		// print_r($product);

		// sent data product to model Admin
		$this->load->model('AdminModels');
		$this->AdminModels->addProductToDatabase($product);
	}

	//Delete one item
	public function delete($id = NULL) {

	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */

?>
