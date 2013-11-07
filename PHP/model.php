<?php
require 'db.php';
class Model {
	public $db;
	function __construct() {
		print "This is Model Constructor!\n";
		//create db connection.
		$this->db = new Database('mysql', 'localhost', 'wingman', 'root', 'quandabab');
	}
}