<?php
include("proxy.php");

if(ip_info(GetIP(), "Country Code")=="TR"){
	echo "Türkiyeden Baglanıyorsun";
}
else{
	echo '<script>alert("VPN Tespit Edildi");</script>';
}


?>