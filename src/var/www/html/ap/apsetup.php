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
<?php
$AP_SSID = $_POST['AP_SSID'];
$AP_PASS = $_POST['AP_PASS'];
$AP_IP = $_POST['AP_IP'];
$NET_CONNECT = $_POST['NET_CONNECT'];

echo "<center><h3>New access point settings</h3<br><br></center>";
echo "<center><br><b>Network name (SSID):</b>&nbsp;";
echo $AP_SSID."</center>";
echo "<center><br><br><b>Passphrase:</b>&nbsp;";
echo $AP_PASS."</center>";
echo "<center><br><br><b>IP Address:</b>&nbsp;";
echo $AP_IP."</center>";
echo "<center><br><br><b>Allow internet:</b>&nbsp;";
echo $NET_CONNECT."</center>";
echo "<br><br><center><b>Please reconnect your devices to this access point</b></center>";

$cmd = "/usr/bin/apsetup $AP_SSID $AP_PASS $AP_IP $NET_CONNECT";
exec($cmd);
header("refresh:40; url=http://$AP_IP/");
?>
<script type="text/javascript">
var timeleft = 40;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  }
  document.getElementById("progressBar").value = 40 - timeleft;
  timeleft -= 1;
}, 1000);
</script>
<br>
<br>
<center>
<h4>Activating your new settings</h4>
<progress value="0" max="40" id="progressBar"></progress>
</center>
<br>
<br>
</div>
</div>
</body>
</html>
