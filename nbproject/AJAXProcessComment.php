<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$text = $_POST["comment"];
date_default_timezone_set('UTC');
$date = date("Y-m-d H:i:s");

echo('<comment>' . 
        '<date>' . $date . '</date>' . 
        '<text>' . $text . '</text>' . 
        '</comment>');

?>
