<?php
$AP_SSID = $_POST['AP_SSID'];
$AP_PASS = $_POST['AP_PASS'];
$AP_IP = $_POST['AP_IP'];
$AP_GW = $_POST['AP_GW'];

echo "<center><h3>New access point settings</h3<br><br></center>";
echo "<center><br><b>Network name (SSID):</b>&nbsp;";
echo $AP_SSID."</center>";
echo "<center><br><br><b>Passphrase:</b>&nbsp;";
echo $AP_PASS."</center>";
echo "<center><br><br><b>IP Address:</b>&nbsp;";
echo $AP_IP."</center>";
echo "<center><br><br><b>Gateway:</b>&nbsp;";
echo $AP_GW."</center>";
echo "<br><br><center><b>Please reconnect your devices to this access point</b></center>";

$cmd = "/usr/bin/apsetup $AP_SSID $AP_PASS $AP_IP $AP_GW";
exec($cmd);
?>

