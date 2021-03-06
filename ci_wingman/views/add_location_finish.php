<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Add Location</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>

        <div class="mainmenu_content">
            <input type="button" value="Create Location" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="addlocation_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="button" value="Save and Finish" id="accept_button" class="input_button" onClick="window.location.href='location_menu.php'"></a>
                            <input type="button" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='location_menu.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Your created Location
    is displayed here.
    
    If it is correct,
    Save and Finish.
    
    Else press Cancel
    and start over.
                                      </h3>
            </pre>
        </div>




    </body>
</html>

