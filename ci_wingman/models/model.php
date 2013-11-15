<?php
require 'db.php';
class Model {
	public $db;
	function __construct() {
		//create db connection.
		$this->db = new Database('mysql', 'localhost', 'wingman', 'root', 'quandabab');
	}
}