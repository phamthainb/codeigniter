<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class AdminModels extends CI_Model {

	private $variable;

	public function __construct() {
		parent::__construct();

	}
	public function addProductToDatabase() {

		$target_dir = "uploads/";
		$subfix_image = (explode(".", basename($_FILES["product_image"]["name"])));
		$subfix_image = end($subfix_image);
		$target_file = $target_dir . $this->input->post('product_name') . '-' . date('Y-m-d') . '-' . round(microtime(true)) . '.' . ($subfix_image);
		$uploadOk = 1;
		$mess_notice = '';

		// Check if image file is a actual image or fake image
		if (isset($_POST["submit"])) {
			$check = getimagesize($_FILES["product_image"]["tmp_name"]);
			if ($check === false) {
				$mess_notice = "File is not an image.";
				$uploadOk = 0;
			}
		}

		// Check if file already exists
		if (file_exists($target_file)) {
			$mess_notice = "Sorry, file already exists.";
			$uploadOk = 0;
		}

		// Check file size
		if ($_FILES["product_image"]["size"] > 500000) {
			$mess_notice = "Sorry, your file is too large.";
			$uploadOk = 0;
		}

		// Allow certain file formats
		if ($subfix_image != "jpg" && $subfix_image != "png" && $subfix_image != "jpeg"
			&& $subfix_image != "gif") {
			$mess_notice = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}

		//upload
		if ($uploadOk == 1) {
			if (move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file)) {
				$mess_notice = "The file " . basename($_FILES["product_image"]["name"]) . " has been uploaded.";
			}
		}

		// create $product save infomation of product
		$product = array();
		$product['product_name'] = $this->input->post('product_name');
		$product['product_price'] = $this->input->post('product_price');
		$product['product_image'] = $target_file;
		$product['product_discount'] = $this->input->post('product_discount');
		$product['product_point'] = $this->input->post('product_point');
		$product['product_inventory'] = $this->input->post('product_inventory');
		$product['product_size'] = $this->input->post('product_size');
		$product['product_detail'] = $this->input->post('product_detail');

		$con = $this->db->insert('table_dssp', $product);
		$result = array(
			"main" => $con,
			"mess_notice" => $mess_notice,
		);
		return $result;
	}
	public function getProductFromDatabase($filter) {
		// print_r($filter);
		// die();
		$size = $filter['size'];
		$price = $filter['price'][0] === 1 ? 100 : 1000;
		$vote = $filter['vote'][0];

		$query = $this->db->get('table_dssp');

		if (is_array($filter)) {
			if (array_key_exists('size', $filter) && array_key_exists('price', $filter) && array_key_exists('vote', $filter)) {
				//1 all value in filter
				echo "1 all value in filter";
				// $this->db->or_having(array('product_size =' => , 'product_price' => , 'product_vote' => ))
			} elseif (array_key_exists('size', $filter) && array_key_exists('price', $filter)) {
				//2 size, price
				echo "size, price";
			} elseif (array_key_exists('vote', $filter) && array_key_exists('price', $filter)) {
				//3 vote, price
				echo "vote, price";
			} elseif (array_key_exists('size', $filter) && array_key_exists('vote', $filter)) {
				//4 size, vote
				echo " size, vote";
			} elseif (array_key_exists('price', $filter)) {
				//5 price
				echo "price";
				$query = $this->db->get_where('table_dssp', 'product_price' <= $filter['price'][0]);
			} elseif (array_key_exists('vote', $filter)) {
				//6 vote
				echo "vote";
				// print_r($filter);
			} elseif (array_key_exists('size', $filter)) {
				//7 size
				echo "size";
			}
		} else {
			echo 'nothing';
		}

		print_r($query->result_array());
		// die();
		return $query->result_array();
	}
}

/* End of file Admin.php */
/* Location: ./application/models/Admin.php */
?>