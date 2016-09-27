<?php
$type=isset($_GET['type'])?$_GET['type']:' ';
$ip=isset($_GET['ip'])?$_GET['ip']:' ';
if ($type == 'localip4')
{
	$file = fopen("file.txt","a");
	fwrite($file, "\r\nlocal_ip:". $_GET['ip']);
	fclose($file);
	echo 'ok';
}
else if ($type == 'localip6')
{
	$file = fopen("file.txt", "a");
	fwrite($file, "\r\nlocal_ipv6:". $_GET['ip']);
	fclose($file);
	echo 'ok';
}
else if ($type == 'publicip4')
{
	$file = fopen("file.txt", "a");
	fwrite($file, "\r\npublic_ip:". $_GET['ip']);
	fclose($file);
	echo 'ok';
}
else if ($type == 'openlocalip')
{
	$file = fopen("file.txt", "a");
	fwrite($file, "\r\nlocal_open_ip:". $_GET['ip']);
	fclose($file);
	echo 'ok';
}
else 
{
	echo 'bad';
}
?>