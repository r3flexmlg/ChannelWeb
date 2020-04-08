<?php
require_once ("libraries/TeamSpeak3/TeamSpeak3.php");
include ('config.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$ChannelName = $_POST['name'];
$SubChannelName = $_POST['subname'];
if (empty($SubChannelName)) $SubChannelName = "Sub channel name";
$ChannelPassword = $_POST['ChannelPass'];
$client_uid = $_POST['uid'];

if (!$ChannelName || !$client_uid) {
	echo "Channel name and client UID must be filled!";
	exit();
}

$ts3_VirtualServer = TeamSpeak3::factory("serverquery://" . $UserAdmin . ":" . $PWQuery . "@" . $IP_TS . ":" . $PuertoQuery . "/?server_port=" .  $PuertoTS . "&blocking=0&nickname=" . $nickname . "");
// Client must be online
$clients = $ts3_VirtualServer->clientList();
$online = false;
foreach($clients as $key=>$value) {
	if ($value['client_unique_identifier']->toString() == $client_uid) $online = true;
}
if ($online === false) {
	echo "Client isn't online!";
	exit();
}

// List all clients containing specified channel group.
$client_list = $ts3_VirtualServer->channelGroupClientList($channel_admin_id);
$clID = $ts3_VirtualServer->clientGetByUid($client_uid);
$client_dbid = $clID["client_database_id"];
$found = array_search($client_dbid, array_column($client_list, 'cldbid'));
// If client already has channel, he contains channel group specified in config.
if ($found !== false) {
	echo "Client already has a channel!";
	echo "<br>";
	echo "You can't be channel admin of more than 1 channel!";
	exit();
}

$channel_list = $ts3_VirtualServer->request("channellist")->toString();
// If channel of specified ID exists.
if (strpos($channel_list, "cid=" . $ch_zone_start) === false) {
	echo "This channel ID doesn't exist!";
	echo "<br>";
	echo "Change zone channel ID start in config!";
	exit();
}

if (strpos($channel_list, $ChannelName)) {
	echo "This channel already exists!";
	exit();
}

$sub_cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" => $ChannelName,
	"channel_password" => $ChannelPassword,
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_topic" => "Channel created via EvDBoard",
	"channel_flag_permanent" => TRUE,
	"cpid"                   => $ch_zone_start,
));
$sub2_cid = $ts3_VirtualServer->channelCreate(array(
	"channel_name" => $SubChannelName,
	"channel_password" => $ChannelPassword,
	"channel_codec" => TeamSpeak3::CODEC_OPUS_VOICE,
	"channel_topic" => "Channel created via EvDBoard",
	"channel_flag_permanent" => TRUE,
	"cpid"                   => $sub_cid,
));
$clID = $ts3_VirtualServer->clientGetByUid($client_uid);
$client_info = $ts3_VirtualServer->execute("clientgetnamefromuid", array(
	"cluid" => $client_uid
))->toList();

$cldbid = strval($client_info['cldbid']);
$ts3_VirtualServer->execute("clientmove", array(
	"clid" => $clID,
	"cid" => $sub_cid
));
$ts3_VirtualServer->execute("setclientchannelgroup", array(
	"cldbid" => $cldbid,
	"cid" => $sub_cid,
	"cgid" => $channel_admin_id
));
echo "Congratulations your channel was created! Enjoy your stay!";
?>