<!DOCTYPE html>

<html>
<head>
    <title>Wingman - Create Order</title>
    
    <link type="text/css" rel="stylesheet" media="only screen and (min-device-width: 768px) and (max-device-width: 1920px)" href="styling/style_tablet.css" />
    
</head>

<body>
    
    <header>
        
        <h1 id="header">Wingman</h1>
        
        <input type="button" value="Home" id="home_button" class="header_button" onClick="window.location.href='main_menu.php'"></a>
        
        <input type="button" value="Back" id="back_button" class="header_button" onClick="window.location.href='orders.php'"></a>
        
        <input type="button" value="Log Out" id="logout_button" class="header_button" onClick="window.location.href=''"></a>
        
        
    </header>
    
    
    <div class="mainmenu_content">  
<div id="button_1">
    <input type="button" value="Create Order" id="createorder_button" class="highlighted_mainmenu_button"></a>
</div> 
    </div>

<div class="input_area_2">
    <table class="updateDB_form">
<form name="createorder_form" method="post" action="">
<tr>
<td><input type="text" name="bladeID" class="input_field2_1" placeholder="Blade ID" required="required"></td>
</tr>
<tr>
    <td><select name="blade_location" size="1" class="input_field2_2" required="required">
    <option selected="selected" value="">From: Blade Location</option>
    <option value=""></option>
    </select></td>
</tr>
<tr>
    <td><select name="user_location" size="1" class="input_field2_3" required="required">
    <option selected="selected" value="">To: User Location</option>
    <option value=""></option>
    </select></td>
</tr>
<tr>
    <td><input type="time" name="time" class="input_field2_4" required="required"></td>
</tr>
<tr>
<td><input type="submit" value="Save to List" id="accept_button2" class="input_button2"></td>
</tr>
</form>
    </table>
</div>

    <div class="data_area">
<table class="data_table" border="1" cellpadding="6">
<tr>
<th>Order No.</th>
<th>Blade ID</th>
<th>From</th>
<th>To</th>
<th>Time</th>
<th></th>
</tr>
<tr>
<td>0001</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0002</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0003</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0004</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0005</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0006</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0007</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0008</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0009</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0010</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0011</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0012</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0013</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0014</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0015</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0016</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0017</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0018</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0019</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0020</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
<tr>
<td>0021</td>
<td>B5570011</td>
<td>Port 8</td>
<td>Port 3</td>
<td>11:30</td>
<td><input type="button" value="Execute" onclick="window.location.href=''"></a></td>
</tr>
</table>
    </div>

 
 
</body>
</html>


