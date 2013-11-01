<?php


require 'db.php'; // uden denne kan vi ikke lave noget i databasen.
require 'model.php'; // uden denne har vi ikke kontakt til databasen.

 /*SQL til blades:
 * 
 CREATE TABLE Blades
(
ID VARCHAR(50) NOT NULL ,
phase INT ,
PRIMARY KEY (ID)
);

*/

class MBlade extends Model 
{
	// model class for blade. 
	
	function __construct() 
	{
		print "This is MBlade constructor\n";
		parent::__construct();
		}
	
	function createBlade($ID, $row, $space, $Location_ID)
	{ 	
		
		//check if ID exist
	
		$check = $this->exists($ID);
		if($check = false) {return FALSE;}
		else {return TRUE;}	 
		
		$check = $this->
		//check for empty row
		//check for empty space

			//if yes -> give Location_ID
		
		
		$data=array('row'=>$row,'space'=>$space, 'Location_ID'=>$Location_ID);
		$this->db->insert('LocationData', $data);
		
		$addBladeID=array('ID'=>$ID);
		$this->db->insert('Blades', $data);
	}	
	function getID($ID)
	{
		//return ID for blade on specific location.
		//remember to check in control that the specified return values is valid. Remember, empty arrays are always false.
		return $this->db->select('SELECT ID FROM Location WHERE ID = :ID', array('ID' => $ID));
	}
	
	function exists($ID)
	{
		//checks if blade exists
		$check = $this->db->select('SELECT ID FROM Blades WHERE ID = :ID', array('ID' => $ID));
		if($check = FALSE) {return FALSE;}
		else {return TRUE;}
	}
	
	

	function load($ID)
	{
		return $this->db->select('SELECT ID FROM Blades WHERE ID = :ID', array('ID' => $ID));
		
	}
	
	
	function update($ID){
		//update LocationData, ID

		//check om blade exist
		
		$data = array('ID' => $ID);
		
		$this->db->update('LocationData', $data, "`ID` = '{$ID}'");
		}
}	
