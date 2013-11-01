<?php


require 'db.php'; // uden denne kan vi ikke lave noget i databasen.
require 'model.php'; // uden denne har vi ikke kontakt til databasen.

/* SQL til blade:
 * 
 * CREATE  TABLE IF NOT EXISTS `wingman`.`Blades` (
  `bladeID` VARCHAR(50) NULL ,
  `location` VARCHAR(50) NOT NULL ,
  `phase` INT NULL ,
  `Location_locationID` INT NOT NULL ,
  PRIMARY KEY (`bladeID`) ,
  INDEX `fk_Blades_Location1_idx` (`Location_locationID` ASC) ,
  CONSTRAINT `fk_Blades_Location1`
    FOREIGN KEY (`Location_locationID` )
    REFERENCES `wingman`.`Location` (`locationID` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
 * 
 */

class MBlade extends Model {
	// model class for blade. 
	
	function __construct() {
		print "This is MBlade constructor\n";
		parent::__construct();
		}
	
	function getID($locationID){
		//return ID for blade on specific location.
		//remember to check in control that the specified return values is valid. Remember, empty arrays are always false.
		return $this->db->select('SELECT bladeID FROM Blades WHERE locationID = :locationID', array('locationID' => $locationID));
	}
	
	function exists($bladeID){
		//checks if blade exists
		$check = $this->db->select('SELECT bladeID FROM Blades WHERE bladeID = :bladeID', array('bladeID' => $bladeID));
		if($check = FALSE) {return FALSE;}
		else {return TRUE;}
	}
	
	

	function load($bladeID){
		return $this->db->select('SELECT bladeID,locationID FROM Blades WHERE bladeID = :bladeID', array('bladeID' => $bladeID));
		
	}
	
	function update($bladeID, $locationID){
		//update locationID
		
		$data = array('locationID' => $locationID);
		
		$this->db->update('Blades', $data, "`bladeID` = '{$bladeID}'");
		}
}	

//dfdgfdfd