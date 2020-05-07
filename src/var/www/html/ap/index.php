<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Akobox Access Point</title>
<link href="form.css" rel="stylesheet">
</head>
<body>
<div id="main">
<div id="first">
	<center>
<h2>Setup Akobox Access Point Security</h2>
</center>
<form method="post" action="apsetup.php">
<?php include('apconfread.php');?>
<br>

<h4>Enter Akobox WiFi network  name (SSID)</h4>
<center><input type="text" name="AP_SSID" value="<?php echo $ar['AP_SSID']; ?>" required></center>

<h4>Enter passphrase (8 to 20 alphanumeric characters)</h4>
<center><input type="text" name="AP_PASS" value="<?php echo $ar['AP_PASS']; ?>" pattern="^[A-Za-z0-9]{8,20}$" required></center>

<h4>Enter IP Address, e.g. 192.168.4.1</h4>
<center><input type="text" name="AP_IP" value="<?php echo $ar['AP_IP']; ?>" pattern="^(?:(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])(\.(?!$)|$)){4}$" required></center>

<h4>Enable/Disable internet access through this Access Point</h4>
<center>  <select id="NET_CONNECT" name="NET_CONNECT">
    <option value="true" <?php if ($ar['NET_CONNECT']==true) echo 'selected="selected"';?>>Enable</option>
    <option value="false" <?php if ($ar['NET_CONNECT']==false) echo 'selected="selected"';?>>Disable</option>
  </select></center>
<br> 
<br> 
<center><input type="submit" value="Submit" /></center>
<br>
</form>
</div>
</div>
</body>
</html>
