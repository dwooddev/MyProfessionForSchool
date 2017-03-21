<?php
try{
   $comment = $_POST["commentfld"];
   if($comment != null){
       storeComment($comment);
       header('Location: index.php');
   } else {
       header('Location: comment.php');
   }
}
catch(Exception $e){
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
exit();
function storeComment($userComment){
    //ADD THIS CODE TO STICK INTO DATABASE
}
?>
