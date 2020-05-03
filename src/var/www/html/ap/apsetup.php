<?php
$AP_SSID = $_POST['AP_SSID'];
$AP_PASS = $_POST['AP_PASS'];


if(empty($AP_SSID ) || empty($AP_PASS )) {
echo "<h2>You must fill in all fields</h2>\n" ;
die ("Click Back to start again.");
}
echo "<h2>You Entered the following information:</h2>";
echo "<b>Access point name:</b><br><br>";
echo $AP_SSID;
echo "<br><br><b>Access point password:</b><br><br>";
echo $AP_PASS;

?>
<?php
$cmd = "/usr/bin/apsetup $AP_SSID $AP_PASS";
system($cmd,$return_value);
?>

