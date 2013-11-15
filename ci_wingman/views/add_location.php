<!DOCTYPE html>

<html>
<head>
    <title>Wingman - Add</title>
    
    <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
</head>

<body>
    
    <header>
        
        <h1 id="header">Wingman</h1>
        
        <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
        <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='locations.php'"></a>
        
        <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
            
    </header>

    <div class="mainmenu_content">
<div id="button_1">
    <input type="button" value="Create Location" id="createlocation_button" class="highlighted_mainmenu_button"></a>
</div>
    </div>

<div class="input_area">
	<table class="updateDB_form">


	<?php echo validation_errors();?> 

		<form method="post" action="<?php echo base_url('index.php/location/add_location');?>">
			<tr>
				<td><input type="text" name="locationName" value="" class="input_field_middle_2" placeholder="Location Name"></td>
			</tr>
			<tr>
				<td>
					<select name="plant_storage" size="1" class="input_field_middle_4" required="required">
   		 				<option selected="selected" value="">Select Type</option>
   		 				<option value=""></option>
   		 				<option value="plant">Plant</option>
   		 				<option value="storage">Storage</option>
    				</select>
    			</td>
			</tr>
			<tr>
				<td>
					<input type="Submit" value="Save and Next" id="accept_button" class="input_button"</a>
    				<input type="button" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='locations.php'"></a>
   			 	</td>
			</tr>
		</form>
	</table>
</div>
    

    <div class="input_area_2">
        <h1 class="help_header">HELP:</h1>
    <pre class="help_message"><h3>  
    
    
    Enter the desired
    Lokation Name.
    
    
    Select a Location
    Type:
    
    
    
    You can only select
    one.
    Plant or Storage.
    </h3>
    </pre>
    </div>




</body>
</html>

