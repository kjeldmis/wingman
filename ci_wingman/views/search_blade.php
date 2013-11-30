<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Search Blade</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='blade_menu.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <input type="button" value="Search Blade" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="createblade_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="text" name="bladeID" class="input_field_middle_2" placeholder="Blade ID" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="search" value="Search" id="accept_button" class="input_button" onClick="window.location.href='search_blade.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Input the Blade ID of
    the Blade you wish to
    Search for.
    
    Then click the
    "Search" button.                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
