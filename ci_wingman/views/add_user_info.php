<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Create User</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/location/main_menu');?>'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/location/user_menu');?>'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
    
        <div class="mainmenu_content">
            <div id="button_1">
                <input type="button" value="Create User" id="createuser_button" class="highlighted_mainmenu_button">
            </div> 
        </div>


        <div class="input_area">
            <table class="updateDB_form">
                <form name="_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="text" name="emp_num" class="input_field_1" placeholder="Employee Number" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="first_name" class="input_field_2" placeholder="First Name" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="last_name" class="input_field_3" placeholder="Last Name" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="tlf_num" class="input_field_4" placeholder="Telephone Number" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="emp_pw" class="input_field_5" placeholder="Employee Password" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="" size="1" class="input_field_6" required="required">
                                <option selected="selected" value="">Select Emp. Location</option>
                                <option value=""></option>
                                <option value="a">Port 8</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Save and Next" id="accept_button" class="input_button"/>
                            <input type="button" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='<?php echo base_url('index.php/location/user_menu');?>'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    Enter a unique
    Employee Number.
   
    Enter the required
    User information.

    Enter an Employee
    Password for the
    User.
    
    Select a Work
    Location for the
    User.
                                     </h3>
            </pre>
        </div>
    

 
 
    </body>
</html>


