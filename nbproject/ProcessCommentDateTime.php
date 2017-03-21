<?php

$comment = $_POST["comment"];
date_default_timezone_set('UTC');
$datetime = date("Y-m-d H:i:s");

storeComment($comment, $datetime);

echo ('{ "datetime" : "' . $datetime . '", ' .
        '"comment" S: "' . $comment . '"}');
?>
        


       

