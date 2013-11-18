<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Locations</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/main/main_menu');?>'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/main/main_menu');?>'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
        
            <input type="button" value="Create Location" id="button_1" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/location/add_location');?>'"></a>
            <input type="button" value="Alter Location" id="button_2" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            <input type="button" value="Delete Location" id="button_3" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            <input type="button" value="Add Location Type" id="button_4" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
        
        </div>
 
 
 
    </body>
</html>


