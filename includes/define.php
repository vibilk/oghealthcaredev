<?php
ob_start(null, 0, false);
//error_reporting(0);
ini_set('memory_limit', '-1');
session_start();
// header('Access-Control-Allow-Origin: *');

/* Resolve the PHP header function */
header('Access-Control-Allow-Origin: *');
// header('Content-Encoding: gzip');
header("Cache-Control: no-cache, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
// header('Content-Encoding: gzip');

try {
	$protocol 	= (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$domainName = $_SERVER['HTTP_HOST'];
	
	
	define("PRODUCTION", false); // true [or] false <---------------check here
	define("PROTOCOL", $protocol);
	define("DOMAIN", $domainName);
		


	/* this has been folder structure 'not browser url' */
	$temp_baseurl = '';
	$temp_api_url = '';
	// $check 		  = explode('/', $_SERVER['REQUEST_URI']);
	if (DOMAIN == 'localhost') {
		$temp_baseurl = '';
		$img_baseurl = PROTOCOL . DOMAIN . $temp_baseurl . '/';
		// $temp_api_url = 'http://';
	} else {
		$temp_baseurl = '';
		$temp_api_url = '';
		$img_baseurl = "";
	}


    define("DOMAINNAME", PROTOCOL . DOMAIN);
	define("BASEURL", DOMAINNAME .$temp_baseurl.'/');
	define("IMAGEBASEURL", BASEURL);
	
} catch (Exception $e) {
}
