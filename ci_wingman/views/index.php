<!DOCTYPE html>

<html>
    <head>
        <title>Wingman - Login</title>
    
        <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="<?php echo base_url('/assets/styling/style_tablet.css') ?>" />
    
    </head>

    <body>
    
        <header>
        
            <h1 id="header">Wingman</h1>
        
            <input type="button" id="tomato"><div id="not_implemented_text"> = Not Implemented</div></a>
        
        </header>
    
    
        <table class="loginform">
            <form name="loginform" method="post" action="<?php echo base_url('index.php/main/main_menu');?>";">
                <tr>
                    <td>
                        <input name="myusername" type="text" id="myusername" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="mypassword" type="password" id="mypassword" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Login" class="login_button">
                </tr>
        </table>
                    </td>
            </form>
    
    


    </body>
</html>
