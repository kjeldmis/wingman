<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Alter Order</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='alter_order_blade.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <input type="button" value="Alter Order" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="createorder_form" method="post" action="">
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
                            <input type="button" value="Update and Save" id="accept_button" class="input_button" onClick="window.location.href='alter_order.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Select a new
    "From: Blade Location".
    
    Select a new
    "To: User Location".
    
    Select a new
    delivery Time.
                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
