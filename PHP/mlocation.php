<?php
require 'model.php';

class MLocation extends Model 
{
	
	/*	lav lokation (name, type)
	 * 		Check om lokation eksisterer (select name from location)
	 * 			Nej: saet navn og type.
	 * 			Ja: Stop. Lokation eksisterer allerede  
	 *		
	 * 	Opret  raekke (Location_ID, antal pladser)
	 * 		Check om raekke allerede eksisterer. (Select Location_ID, row fra LocationData)  	
	 * 			Ja: Stop. raekke eksisterer.
	 * 			Nej: opret raekke
	 * 				Opret pladser i raekken.
	 * 				Saet Blades_ID til at vaere tom.
	 *  
	 *  Slet raekke(raekke)
	 *  	Check om der er blades i raekken. (select bladeID from LocationData where row = $row)
	 *  	Er blades_ID tomt i alle felter?
	 *  		nej: Slet.
	 *  		Ja: stop. 
	 * 
	 * 	Slet lokation
	 * 		Check om alle raekker er tomme (Kompleks) 
	 * 
	 */
	
	
	

}  	
	