<?php
include("proxy.php");

if(ip_info(GetIP(), "Country Code")=="TR"){
	echo "T�rkiyeden Baglan�yorsun";
}
else{
	echo '<script>alert("VPN Tespit Edildi");</script>';
}


?>