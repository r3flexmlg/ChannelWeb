<?php
require_once ("libraries/ts3admin.class.php");
include ('config.php');

// Get json from request.
$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

use par0noid\ts3admin as ts3;

#build a new ts3admin object
$ts_admin = new ts3($IP_TS, $PuertoQuery);

if ($ts_admin->getElement('success', $ts_admin->connect())) {
	#login as serveradmin
    $ts_admin->login($UserAdmin, $PWQuery);
    $ts_admin->selectServer($PuertoTS, 'port');
} else {
}

if (!isset($decoded['function'])) exit;

if ($decoded['function'] == 'Get_UID') {
    $web_ip = getUserIP();
    $res = $ts_admin->clientList('-ip -uid');
    if (!$res["success"]) {
        echo json_encode($res["errors"]);
        exit;
    }
    // PHP function to check for even elements in an array
    $filtered = array_filter($res["data"], function ($var) use ($web_ip) {
        return ($var['connection_client_ip'] == $web_ip);
    });
    echo json_encode($filtered);
    exit;
}


function getUserIP() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}