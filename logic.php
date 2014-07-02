<?php 
date_default_timezone_set('America/New_York');

$morning = mktime(5);
$afternoon = mktime(11);
$evening = mktime(12+4);
$night   = mktime(12+8);

$current = mktime(date("G"));
$img = "";
$class_value = "INIT";

if($current >= $morning && $current < $afternoon) {
    $img = "php-morning.png";
    $class_value = "morning";
}
else if($current >= $afternoon && $current < $evening) {
    $img = "php-afternoon.png";
    $class_value = "afternoon";
}
else if($current >= $evening && $current < $night) {
   $img = "php-evening.png";
   $class_value = "evening";
}
else {
    $img = "php-night.png";
    $class_value = "night";
}
