<?php
/**
 * paginate
 */
class Paginator {
	/**
	 * @var __conn, _limit, _page, _query, _total
	 * @var requie : $conn, $query, $limit
	 */
	private $__conn, $_limit, $_page, $_query, $_total;

	public function __construct($table, $query, $limit) {
		$this->_conn = new mysqli('localhost', 'root', '', $table);

		$this->_query = $query;
		$this->_limit = $limit;

		$rs = $this->_conn->query($this->_query); // query to database => records
		if ($rs) {
			$this->_total = $rs->num_rows;
		} else {
			echo ("error in query db");
		}
		//
	}
	// get data
	public function getData($page = 1) {
		// $this->_limit = $limit;
		$this->_page = $page;

		if ($this->_limit == 'all') {
			$query = $this->_query;
		} else {
			$query = $this->_query . " LIMIT " . (($this->_page - 1) * $this->_limit) . ", $this->_limit";
			// print_r($query);
			// die();
			$rs = $this->_conn->query($query);

			while ($row = $rs->fetch_assoc()) {
				$results[] = $row;
			}

			$result = new stdClass(); // create an object
			$result->page = $this->_page;
			// $result->limit = $this->_limit;
			$result->total = $this->_total;
			$result->data = $results;

			return $result;
		}
	}

	// display the paginate links //$links max the button
	public function createLinks($links, $list_class) {

		if ($this->_limit == 'all') {
			return '';
		}

		$last = ceil($this->_total / $this->_limit);

		$start = (($this->_page - $links) > 0) ? $this->_page - $links : 1;
		$end = (($this->_page + $links) < $last) ? $this->_page + $links : $last;

		$html = '<ul class="' . $list_class . '">';

		$class = ($this->_page == 1) ? "disabled" : "page-item";
		$html .= '<li class="' . $class . '"><a class="page-link" >&laquo;</a></li>';

		if ($start > 1) {
			// check page is first
			$html .= '<li><a class="page-link">1</a></li>';
			$html .= '<li class="disabled"><span class="page-link">...</span></li>';
		}

		for ($i = $start; $i <= $end; $i++) {
			// create the links
			$class = ($this->_page == $i) ? "active page-item" : "page-item";
			$html .= '<li class="' . $class . '"><a class="page-link" >' . $i . '</a></li>';
		}

		if ($end < $last) {
			$html .= '<li class="disabled"><span>...</span></li>';
			$html .= '<li><a class="page-link" >' . $last . '</a></li>';
		}

		$class = ($this->_page == $last) ? "disabled" : "";
		$html .= '<li class="' . $class . '"><a class="page-link" >&raquo;</a></li>';

		$html .= '</ul>';

		return $html;
	}

}

?>
