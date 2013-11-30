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
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='alter_user.php'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <input type="button" value="Alter User" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="createblade_form" method="post" action="">

                    <tr class="input_field_1">
                        <td>
                            <p><b><u>Employee:</u></b></p>
                        </td>
                        <td>
                            <p>"Employee Number"</p>
                        </td>
                    </tr>
                    <tr class="input_field_2">
                        <td>
                            <p><b>tel. Number:</b></p>
                        </td>
                        <td>
                            <p>"Current tlf. Number"</p>
                        </td>
                        <td>
                            <form method="post" action="">
                                <input type="text" name="edit" placeholder="Edit tel. Number">
                                <input type="submit" name="update" Value="Update">
                            </form>
                        </td>
                    </tr>
                    <tr class="input_field_3">
                        <td>
                            <p><b>Password:</b></p>
                        </td>
                        <td>
                            <p>"Current Password"</p>
                        </td>
                        <td>
                            <form method="post" action="">
                                <input type="text" name="edit" placeholder="Edit Password">
                                <input type="submit" name="update" Value="Update">
                            </form>
                        </td>
                    </tr>
                    <tr class="input_field_4">
                        <td>
                            <p><b>Work Location:</b></p>
                        </td>
                        <td>
                            <p>"Current Work Loc."</p>
                        </td>
                        <td>
                            <form method="post" action="">
                                <select name="" size="1" required="required">
                                    <option selected="selected" value="">Edit Emp. Location</option>
                                    <option value=""></option>
                                    <option value=""></option>
                                </select>
                                <input type="button" name="edit" Value="Update" />
                            </form>
                        </td>
                    </tr>
                    <tr class="input_field_5">
                        <td>
                            <p><b>Rights:</b></p>
                        </td>
                        <td>
                            <p>Click to change rights</p>
                        </td>
                        <td>
                            <form method="post" action="">
                                <input type="button" Value="Edit Rights" onClick="window.location.href='alter_user_edit_rights.php'"></a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="button" value="Finish" id="accept_button" class="input_button" onClick="window.location.href='user_menu.php'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Edit the
    User information.

    Edit the
    Employee Password.
    
    Edit the
    User Rights.
                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
