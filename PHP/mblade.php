<?php


require 'mlocation.php'; //skal bruges for kontakt til mlocation.php
 /*SQL til blades:
 * 
 CREATE TABLE Blades
(
ID VARCHAR(50) NOT NULL ,
phase INT ,
PRIMARY KEY (ID)
);

*/
// model class for blade.
class MBlade extends Model 
{
	
	/*
	 * What does create blade do?
	 * 
	 * Check om blade eksisterer i forvejen									Done
	 * 	ja: Fejl
	 * 	Nej: Tildel space paa et row paa en location. 						
	 * 		Check om Space Eksisterer										Done
	 * 			Ja: Check om den er tom										Done
	 * 			Nej: Fejl
	 * 				Ja: Placer blade paa plads og opret blade i databasen.	Done
	 * 				Nej: Fejl 	
	 */

	function create($ID, $row, $space, $Location_ID)
	{
		$result = $this->exists($ID);
		
		if ($result == FALSE) 
		{
			$location = new MLocation();
			$result = $location->spaceExists($Location_ID, $row, $space);
			if ($result == TRUE) 
			{
				$result = $location->isEmpty($Location_ID, $row, $space);
				if ($result == TRUE) 
				{
					$data = array('ID' => $ID);
					$this->db->insert('Blades', $data);
					$data = array(	'Location_ID' => $Location_ID,
									'row' => $row,
									'space' => $space,
									'Blades_ID' => $ID);
					//$this->db->insert('LocationData', $data);
					$this->db->update('LocationData', $data, "`Location_ID` = '{$Location_ID}' AND `row` = '{$row}' AND `space` = '{$space}'");
				}
				else 
				{
					print 'Pladsen er optaget';
				}
			}
			else
			{
				print 'Pladsen eksisterer ikke';
			}
		}
		else 
		{
			print 'Blade eksisterer allerede';
		}
	}
	
	function exists($ID)
	{
		//checks if blade exists
		$check = $this->db->select('SELECT ID FROM Blades WHERE ID = :ID', array('ID' => $ID));
		if($check == FALSE) {return FALSE;}
		else {return TRUE;}
	}
	
	function delete($ID)
	{
		/*
		 * Tasks: 
		 * Check if blade exists. 				Done
		 * 	Yes: 
		 * 		Delete in Blades table. 		Done
		 * 		Update LocationData table. 		Done
		 *  No:
		 *  	Output: blade does not exist. 	Done
		 */
		$result = $this->exists($ID);
		
		if ($result == TRUE) 
		{
			$this->db->delete('Blades', "`ID` = '{$ID}'");
			$data = array('Blades_ID' => '');
			$this->db->update('LocationData', $data, "`Blades_ID` = '{$ID}'");
		}
		else
		{
			print 'Delete: Blade does not exist';
		}
		
	}
	
}	


/*-----------------DEBUGGING AREA-----------------------
 * 
 * ------
 * TASKS
 * ------
 * Test if create function works as intended. 	Done
 * Test if exists works as intended. 			Done
 * Test if delete works.						Done
 */

$testing = new MBlade();
//$testing->create('12134a', 1, 1, 1);
$testing->delete('12134a');