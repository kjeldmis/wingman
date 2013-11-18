<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Alter Order</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/main/main_menu');?>'"></a>
        
            <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='<?php echo base_url('index.php/main/location_menu');?>'"></a>
        
            <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
        </header>
    
        <div class="mainmenu_content">
            <input type="button" value="Alter Order" id="button_1" class="highlighted_mainmenu_button"></a>
        </div>

        <div class="input_area">
                    <tr>
                        <td>
                            <input type="submit" value="Save and Finish" id="accept_button" class="input_button" />
                            <input type="button" value="Cancel" id="cancel_button" class="input_button" onClick="window.location.href='<?php echo base_url('index.php/main/location_menu');?>'"></a>
                        </td>
                    </tr>
                </form>
            </table>
        </div>
    
    
        <div class="input_area_2">
            <h1 class="help_header">HELP:</h1>
            <pre class="help_message"><h3>  
    
    
    Insert help text
    here..
                                     </h3>
            </pre>
        </div>
    

    </body>
</html>
