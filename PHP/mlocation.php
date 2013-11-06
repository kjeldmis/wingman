<?php
require 'model.php';

class MLocation extends Model 
{
	
	/*	lav lokation (name, type)
	 * 		Check om lokation eksisterer (select name from location)
	 * 			Nej: saet navn og type.
	 * 			Ja: Stop. Lokation eksisterer allerede  
	 */
	
	function create($name, $type) 
	{
		//Check if location exists. 
		if ($this->exists($name) == FALSE)
		{
			//OK. Location does not exist.
			$data = array('name' => $name, 'type' => $type);
			$this->db->insert('Location', $data);
		}
	}
	
	/* 	Opret  raekke (Location_ID, antal pladser)
	 * 		Check om raekke allerede eksisterer. (Select Location_ID, row fra LocationData)
	* 			Ja: Stop. raekke eksisterer.
	* 			Nej: opret raekke
	* 				Opret pladser i raekken.
	* 				Saet Blades_ID til at vaere tom.
	*/
	function createRow($location_ID, $row, $spaces) 
	{
		//does this location exist? TODO.
		if($this->exists($location_ID))
		{
			return FALSE;
		}
		//does this row at this location already exist?
		$result = $this->db->select('SELECT row FROM LocationData WHERE row = :row AND Location_ID = :Location_ID', array('row' => $row, 'Location_ID' => $location_ID));
		if (!$result) 
		{
			for ($i = 1; $i <= $spaces; $i++) 
			{
				$data = array('Location_ID' => $location_ID, 'row' => $row, 'space'=> $i, 'Blades_ID' => '');
				$this->db->insert('LocationData', $data);
			} 
		}
	}
  
	 /*  Slet raekke(raekke) TODO
	 *  	Check om der er blades i raekken. (select bladeID from LocationData where row = $row)
	 *  	Er blades_ID tomt i alle felter?
	 *  		nej: Slet.
	 *  		Ja: stop. 
	 * 
	 * 	Slet lokation TODO
	 * 		Check om alle raekker er tomme (Kompleks)
	 */ 

	/*
	 * exists(variable)
	 * Check if location exists (select)
	 * 	yes: return true
	 * 	no: return false
	 */
	
	function exists($variable) 
	{
		$exists = FALSE;
		$variableType = gettype($variable);
		if ($variableType == 'string') 
		{
			//variable is the name.
			$exists = $this->db->select('SELECT name FROM Location WHERE name = :name', array('name' => $variable));
		}
		
		if ($variableType == 'integer') 
		{
			//variable is ID 
			$exists = $this->db->select('SELECT name FROM Location WHERE  ID = :ID', array('ID' => $variable));
		}
		
		if ($exists == TRUE) 
		{
			return TRUE;
		}
		return FALSE;
	}
	
	/*
	 * SpaceExists(Location_ID, row, space)
	 * Check if space exists (select)
	 * 	yes: return true
	 * 	no: return false
	 */
	function spaceExists($Location_ID, $row, $space) 
	{
		$data = array('Location_ID' => $Location_ID, 'row' => $row, 'space' => $space);
		$result = $this->db->select('SELECT * FROM LocationData WHERE Location_ID = :Location_ID AND row = :row AND space = :space',$data);	
		if($result == TRUE){return TRUE;}
		return FALSE;
	}
	
	/*
	 * is Empty(Location_ID, row, space)
	 * Check if location is empty
	 * 	yes: return true
	 * 	no: return false.
	 */
	function isEmpty($Location_ID, $row, $space) 
	{
		$data = array('Location_ID' => $Location_ID, 'row' => $row, 'space' => $space);
		$result = $this->db->select('SELECT Blades_ID FROM LocationData WHERE Location_ID = :Location_ID AND row = :row AND space = :space', $data);
		
		if ($result[0][0] == ''){return TRUE;}
		
		return FALSE;	
	}
	 
	
	 /*  Move blade (bladeID, location_ID, row, space) 
	 *  	check if blade already has a place in locationData (select)
	 *  		yes: Set bladeID for that space to empty (update). 
	 *  		no: Blade is new. No need to update old location. 
	 *  	Set Blades_ID for the new location to $bladeID.
	 * 
	 */
	function moveBlade($Blades_ID, $Location_ID, $row, $space) 
	{
		//Is this blade already in LocationData? -- might be unneccessary with the new create function in mblade. 
		$result = $this->db->select('SELECT Blades_ID FROM LocationData WHERE Blades_ID = :Blades_ID', array('Blades_ID' => $Blades_ID));
		
		if ($result)
		{
			//write to history -- TODO
			//clear the blade from the current position. 
			$data = array('Blades_ID' => '');
			$this->db->update('LocationData', $data,"`Blades_ID` = '{$Blades_ID}'" ); 
		}
		
		//check if the new location exists. If it doesnt, the function returns FALSE. 
		if ($this->spaceExists($Location_ID, $row, $space) == FALSE){return FALSE;}
		
		//Check if the new location is occupied. 
		$empty = $this->isEmpty($Location_ID, $row, $space);
		if ($empty) 
		{
			//yay its empty, lets move it. 
			$data = array('Blades_ID' => $Blades_ID);
			$this->db->update('LocationData', $data, "`Location_ID` = '{$Location_ID}' AND `row` = '{$row}' AND `space` = '{$space}'");
		}	
	}
}  	



/*------------------DEBUGGING AREA-----------------------
 * -----
 * TASKS
 * -----
 * Check if function isEmpty works as intended. TODO
 * Check if function moveBlade works. TODO
 * Check if createRow works. TODO 
 * Check if create works. TODO
 */
	