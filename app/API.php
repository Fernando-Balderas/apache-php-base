<?php

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:GET");
header("Access-Control-Allow-Headers:Content-Type");
header("Access-Control-Allow-Credentials:true");

require_once "models/Auth.php";

$api = new Auth;

if (isset($_GET['type'])) {
	$type = $_GET['type'];
    
	switch ($type) {
		case 1:
			$api->authHome();
            break;
        default:
            $api->notFound();
			break;
	}
}else{
    $api->notFound();
}

?>