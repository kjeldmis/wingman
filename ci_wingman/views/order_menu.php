<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Orders</title>
    
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
                <input type="button" value="Create Order" id="createorder_button" class="mainmenu_button" onClick="window.location.href='<?php echo base_url('index.php/location/create_order');?>'"></a>
            </div>
            <div id="button_2">
                <input type="button" value="Alter Order" id="alterorder_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            </div>
            <div id="button_3">
                <input type="button" value="Order List" id="orderlist_button" class="not_implemented_mainmenu_button" onClick="window.location.href=''"></a>
            </div>
        
        </div>
 
 
 
    </body>
</html>


