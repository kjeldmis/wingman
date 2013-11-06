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
		$exists = $this->db->select('SELECT name FROM Location WHERE name = :name', array('name' => $name));
		if (!$exists)
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
		//does this row already exist?
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
	 * 
	 */
	
	
	

}  	
	