<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Users</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/location/main_menu');?>'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/location/main_menu');?>'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
        
            <div id="button_1">
                <input type="button" value="User List" id="userlist_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            </div>
            <div id="button_2">
                <input type="button" value="Create User" id="createuser_button" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/location/add_user_info');?>'"></a>
            </div>
            <div id="button_3">
                <input type="button" value="Edit User" id="edituser_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            </div>
        
        </div>
 
    </body>
</html>



