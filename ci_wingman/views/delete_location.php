<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Delete Location</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='location_menu.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <input type="button" value="Delete Location" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="data_area">
            <table class="data_table" border="1" cellpadding="6">
                <tr>
                    <th>Location Name</th>
                    <th></th>
                </tr>
                <tr>
                    <td>Port 3</td>
                    <td><input type="button" value="Delete" onClick="window.location.href='delete_location_confirm.php'"></a></td>
                </tr>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Locate the desired
    Location on the list.
    
    Then click the Delete
    button in order to
    delete the Location.
                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
