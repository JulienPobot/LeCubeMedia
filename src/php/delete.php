<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome page</title>
<style type="text/css" media="screen">
body { background: #e7e7e7; font-family: Verdana, sans-serif; font-size: 11pt; }
#page { background: #ffffff; margin: 50px; border: 2px solid #c0c0c0; padding: 10px; }
#header { background: #4b6983; border: 2px solid #7590ae; text-align: center; padding: 10px; color: #ffffff; }
#header h1 { color: #ffffff; }
#body { padding: 10px; }
span.tt { font-family: monospace; }
span.bold { font-weight: bold; }
a:link { text-decoration: none; font-weight: bold; color: #C00; background: #ffc; }
a:visited { text-decoration: none; font-weight: bold; color: #999; background: #ffc; }
a:active { text-decoration: none; font-weight: bold; color: #F00; background: #FC0; }
a:hover { text-decoration: none; color: #C00; background: #FC0; }
</style>
</head>
<body>
<div id="page">
 <div id="header">
 <h1> Network Setup </h1>
  SSID REMOVAL
 </div>

<?php
	if($_POST["delete"] == NULL){
		echo "<br>";
		print "ERROR. Please select an SSID to delete.";
		echo "<br>";}else{
	
	//-----ERROR REPORTING
	//error_reporting(E_ALL);
	//ini_set('display_errors', 1);

	$file = fopen("/home/pi/LeCubeMedia/src/lecube/mod/ssiddelete", "w") or die ("ERROR");
	$target = $_POST["delete"];
	
	fwrite($file, $target);
	fclose($file);

	echo "<p>Attention: $target will only be removed definitively by tapping the corresponding NFC tag to 
	the Cube</p>";
	}
?>

<a href="http://192.168.42.1/index.php"> Return </a>


</div>
</body>
</html>