<?php
class Model {
	public $db;
	function __construct() {
		print "This is MBlade constructor\n";
		//create db connection.
		$this->db = new Database($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS);
	}
}