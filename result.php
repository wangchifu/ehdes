<?php
include_once("config.php") ;
$result = json_decode(school_API());

print_r($result);