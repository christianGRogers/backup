<?php
$skill = $_POST["skill"];
$time = $_POST["time"];
$activity = $_POST["activity"];
$formation = $_POST["formation"];

$N = "\n";

$myfile = fopen("contr.txt", "a") or die("Unable to store");
fwrite($myfile, $skill."\n".$time."\n".$activity."\n".$formation."\n==========\n");
fclose($myfile);
header("Location: http://bradensbay.com/lessonHelper/");
?>
