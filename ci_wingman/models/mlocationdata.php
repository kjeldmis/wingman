<?php
require 'model.php';
/*
 * location SQL script
*
*
-- -----------------------------------------------------
-- Table `wingman`.`LocationData`
-- -----------------------------------------------------
CREATE TABLE LocationData
(
ID INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY (ID) ,
Location_locationID INT NOT NULL ,
row INT NOT NULL ,
space INT NOT NULL ,
Blades_bladeID VARCHAR(50)
);

*/

class Mlocationdata extends Model
//model class for LocationData
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function create ($Location_locationID, $row, $space)
	{
		$data = array('Location_locationID'=>$Location_locationID, 
					  'row'=>$row, 
				      'space'=>$space);
		
		$this->db->insert('LocationData', $data);
		
	}
	
	function moveBlade($bladeID, $locationData_ID)
	{
	
		$result = $this->db->select('SELECT Blades_bladeID FROM LocationData WHERE ID = :locationDataID', array('locationDataID' => $locationData_ID));
		
		if(!$result OR $result[0][0] == '') // No rows returned. Means location has never been used before. First row is blank, means space is empty 
		//needs some way to ensure that moved location actually exists. 
		{
		$data=array('LocationData_ID'=>$locationData_ID,
						'location_locationID=>$location_locationID');
		
		$this->db->update('LocationData', $data, "'Blades_bladeID' = '{$bladeID}'");
		} 
	}
}