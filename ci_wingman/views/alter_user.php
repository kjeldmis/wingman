<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Alter User</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='user_menu.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <input type="button" value="Alter User" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="createblade_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="text" name="emp_num" class="input_field_middle_2" placeholder="Employee Number" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="Alter" id="accept_button" class="input_button" onClick="window.location.href='alter_user_edit.php'"></a>
                            <input type="reset" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='user_menu.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Input the Employee
    number of the User
    that you wish
    to Alter.
                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
