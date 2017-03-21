<?php
include 'User.php';

try{
   $user = new User();
   $user->firstname = $_POST["firstname"];
   $user->username = $_POST["username"];
   $user->lastname = $_POST["lastname"];
   $user->password = $_POST["password"];
   if($user->validate()){
       addAccount($user);
       header('Location: index.php');
   } else {
       header('Location: create.php');
   }
}
catch(Exception $ex){
    echo 'Caught exception: ',  $ex->getMessage(), "\n";
}
exit();
function addAccount($newUser){
    //ADD THIS CODE TO STICK INTO DATABASE
    $retval = false;
    try{
        $connection = getConnection();
        $sql = "INSERT INTO users (first_name, last_name, user_name, password)"
                . "VALUES('$newUser->firstname','$newUser->lastname','$newUser->username','$newUser->password')";
        $connection->exec($sql);
        $connection = null;
        $retval = true;
    } catch (Exception $ex) {
        echo "EXCEPTION! Insert Failed: " . $ex->getMessage();
    }

    return $retval;
}

function getConnection(){
    $servername = "127.0.0.1";
    $dbname = "profdb";
    $username = "root";
    $password = "DrDw00d!";
    try{
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $ex) {
        echo "EXCEPTION! Connection Failed " . $ex->getMessage();
    }
    return $connection;
}
?>


