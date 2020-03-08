<?php
include "/var/www/homeserver/pv.php";

$logfile = "/var/www/homeserver/pvData/pvTemps.log";

$pvData = new pvData();
$time = $pvData->getUpdateTime();
$temp = $pvData->getTemp();
$power = $pvData->getPower();

$logstring = "$time $power $temp\n";
file_put_contents($logfile, $logstring, FILE_APPEND);

if ($temp > 49.0)
{
    //exec("/home/martijn/sources/pvTempWarning/send_mail $temp");
}
else
{
    echo "Temp is fine";
}

?>
