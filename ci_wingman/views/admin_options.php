<!DOCTYPE html>

<html>
<head>
    <title>Wingman - Admin Options</title>
    
    <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css')?>" />
    
</head>

<body>
    
    <header>
        
        <h1 id="header">Wingman</h1>
        
        <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
        <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
        <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>

    </header>
    
<div class="mainmenu_content">
        
<div id="button_1">
    <input type="button" value="Locations" id="locations_button" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('/index.php/main/location_menu')?>'"></a>
</div>
<div id="button_2">
    <input type="button" value="Users" id="users_button" class="mainmenu_button" onClick="window.location.href='users.php'"></a>
</div>
<div id="button_3">
    <input type="button" value="Rights" id="rights_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
</div>
<div id="button_4">
    <input type="button" value="" id="_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
</div>
<div id="button_5">
    <input type="button" value="" id="_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
</div>
<div id="button_6">
    <input type="button" value="" id="_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
</div>
        
</div>
 
 
 
</body>
</html>


