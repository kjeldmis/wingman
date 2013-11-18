<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Create Order</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/main/main_menu');?>'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/order/order_menu');?>'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
    
        <div class="mainmenu_content">  
            <input type="button" value="Create Order" id="button_1" class="highlighted_mainmenu_button"></a> 
        </div>

        <div class="input_area_2">
            <table class="updateDB_form">
                <form name="createorder_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="text" name="bladeID" class="input_field2_1" placeholder="Blade ID" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="blade_location" size="1" class="input_field2_2" required="required">
                                <option selected="selected" value="">From: Blade Location</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="user_location" size="1" class="input_field2_3" required="required">
                                <option selected="selected" value="">To: User Location</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="time" name="time" id="time" class="input_field2_4" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Save to List" id="accept_button2" class="input_button2">
                        </td>
                    </tr>
                </form>
            </table>
        </div>

        <div class="data_area">
            <table class="data_table" border="1" cellpadding="6">
                <tr>
                    <th>Order No.</th>
                    <th>Blade ID</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Time</th>
                    <th></th>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>B5570011</td>
                    <td>Port 8</td>
                    <td>Port 3</td>
                    <td>11:30</td>
                    <td><input type="submit" value="Execute"/></td>
                </tr>
            </table>
        </div>

 
 
    </body>
</html>


