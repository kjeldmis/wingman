<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Create Order</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='order_menu.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>
    
    
        <div class="mainmenu_content">  
            <input type="button" value="Create Order" id="button_1" class="highlighted_mainmenu_button"></a> 
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="createorder_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="text" name="bladeID" class="input_field_middle_1" placeholder="Blade ID" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="blade_location" size="1" class="input_field_middle_2" required="required">
                                <option selected="selected" value="">From: Blade Location</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="user_location" size="1" class="input_field_middle_3" required="required">
                                <option selected="selected" value="">To: User Location</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="time" name="time" id="time" class="input_field_middle_4" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="Save" id="accept_button" class="input_button" onClick="window.location.href='create_order_add_finish.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>


         <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    Input the desired
    Blade ID.
    
    Select from where the
    Blade should be picked
    up from.
    
    Select where you want
    the Blade to be
    delivered.
    
    Select the Time you
    wish the Order to be
    executed.
                                     </h3>
            </pre>
        </div>
 
    </body>
</html>


