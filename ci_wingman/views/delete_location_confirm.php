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
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>

        <div class="mainmenu_content">
            <input type="button" value="Delete Location" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="addlocation_form" method="post" action="">
                    <tr>
                        <td class="input_field_4">
                            Are you sure you wish
                            to Delete this Location?
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="YES" id="accept_button" class="input_button" onClick="window.location.href='location_menu.php'"></a>
                            <input type="button" value="NO" id="cancel_button" class="input_button" onClick="window.location.href='location_menu.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Select whether you
    are sure you wish
    to Delete the Location
    or not.
    
    Yes or No.
                                      </h3>
            </pre>
        </div>




    </body>
</html>

