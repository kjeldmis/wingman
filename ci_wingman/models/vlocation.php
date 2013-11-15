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

class VLocation {
	//Dropdown funktion til at vise liste af locations, med frie pladser. 
	/*
	 * Find alle areas og list dem. 
	 * 
	 * 
	 */
	
	function viewAll() 
	{
		//might move this to mlocation.php 
		
		$location = new MLocation();
		$result = $location->listLocations();
		
		//dont know if first count should be 1 or 0. Ask Thomas for this. Done
		//Answer: 0 is the first place in a select class. 
		$i=0;
		foreach ( $result as $res ) {
			$options[$i] = '<option value=' . $i . '>' . $res['name'] . '</option>';
			$i++;
		}
	  return $options;
	}
}
/*--------------------------
 * 		DEBUGGING AREA
 *--------------------------
 *
 *-----
 *TASKS
 *-----
 *Test viewAll Done 
 */
	
$viewlocation = new VLocation();


$options = $viewlocation->viewAll();
?>

<select class="" id="locations" size="<?php echo count($options)?>" name="locations">
<?php echo implode("\n", $options); ?>
</select>

<?php  $select_val = $_GET['locations'];
echo $select_val;?>

