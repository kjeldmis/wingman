<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Create Blade</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/location/main_menu');?>'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/location/blade_menu');?>'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <div id="button_1">
                <input type="button" value="Create Blade" id="createblade_button" class="highlighted_mainmenu_button"></a>
            </div>
        </div>

        <div class="input_area">
            <table class="updateDB_form">
                <form name="createblade_form" method="post" action="">
                    <tr>
                        <td>
                            <input type="text" name="bladeID" class="input_field_middle_1" placeholder="Blade ID" required="required">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="location" size="1" class="input_field_middle_2" required="required">
                                <option selected="selected" value="">Location</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="rows" size="1" class="input_field_middle_3" required="required">
                                <option selected="selected" value="">Row</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select name="space" size="1" class="input_field_middle_4" required="required">
                                <option selected="selected" value="">Space</option>
                                <option value=""></option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Save and Finish" id="accept_button" class="input_button"/>
                            <input type="button" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='<?php echo base_url('index.php/location/blade_menu');?>'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Enter the desired
    Blade ID.
    
    
    Select a Location
    for the Blade.
    
    
    Select a Row and
    a Space for the Blade.
                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
