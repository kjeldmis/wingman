<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Create User</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='add_user_info.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href='index.php'"></a>
        
        
        </header>
    
    
        <div class="mainmenu_content">
                <input type="button" value="Create User" id="button_1" class="highlighted_mainmenu_button">
        </div>


        <div class="input_area">
            <table class="updateDB_form">
                <form name="user_rights_form" method="post" action="">
                    <tr>
                        <td class="input_field_other_1"><input type="checkbox" name="rights" value="Add Location Type" class="checkbox">
                            Add Location Type
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_2"><input type="checkbox" name="rights" value="Assign Rights" class="checkbox">
                            Assign Rights
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_3"><input type="checkbox" name="rights" value="Create Admin" class="checkbox">
                            Create Admin
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_4"><input type="checkbox" name="rights" value="Create Blade" class="checkbox">
                            Create Blade
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_5"><input type="checkbox" name="rights" value="Create Location" class="checkbox">
                            Create Location
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_6"><input type="checkbox" name="rights" value="Create Order" class="checkbox">
                            Create Order
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_7"><input type="checkbox" name="rights" value="Create User" class="checkbox">
                            Create User
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_8"><input type="checkbox" name="rights" value="Delete Blade" class="checkbox">
                            Delete Blade
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_9"><input type="checkbox" name="rights" value="Edit User" class="checkbox">
                            Edit User
                        </td>
                    </tr>
                    <tr>
                        <td class="input_field_other_10"><input type="checkbox" name="rights" value="Search Blade" class="checkbox">
                            Search Blade
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="button" value="Save and Finish" id="accept_button" class="input_button" onClick="window.location.href='user_menu.php'"></a>
                            <input type="button" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='user_menu.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Assign the required
    Rights to the User.
    
    You can select one
    or more Rights for
    each User.
                                      </h3>
            </pre>
        </div>
    

 
 
    </body>
</html>



