<?php
require 'mlocation.php';

/*
 * <?php
$options = array();
$options[] = "<option value=''>--?--</option>";
$db =& JFactory::getDBO();
$query = "
  SELECT `id`, `title`
    FROM `#__content`
    WHERE `sectionid` = 0
      AND `state` = 1  
      ORDER BY `title`;
";
$db->setQuery($query);
$data = $db->loadObjectList();
foreach ( $data as $d ) {
  $options[] = "<option value='{$d->id}'>{$d->title}</option>";
}
?>
<select class="" id="articles" size="1" name="articles">
<?php echo implode("\n", $options); ?>
</select>
 */

class VBlade {
	//Dropdown funktion til at vise liste af locations, med frie pladser. 
	/*
	 * Find alle areas og list dem. 
	 * 
	 * 
	 */
	
	function __construct() {
		$areas = array();
		
		$areas[] = "<option value=''>--?--</option>";
		
		$locationLoader = new MLocation();
		
		$result = $blade->db->select($sql);
		
		//example select: $this->db->select('SELECT bladeID FROM Blades WHERE locationID = :locationID', array('locationID' => $locationID));
		
		;
	}
}