<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Main Menu</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        </header>
    

        <div class="mainmenu_content">
        
            <input type="button" value="Orders" id="button_1" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/main/order_menu');?>'"></a>
            <input type="button" value="Blades" id="button_2" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/main/blade_menu');?>'"></a>
            <input type="button" value="Locations" id="button_3" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/main/location_menu');?>'"></a>
            <input type="button" value="Users" id="button_4" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/main/user_menu');?>'"></a>
            <input type="button" value="Rights" id="button_5" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            <input type="button" value="" id="button_6" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            <input type="button" value="" id="button_7" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            <input type="button" value="" id="button_8" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            <input type="button" value="" id="button_9" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            
        </div>
 
 
 
 
    </body>
</html>
