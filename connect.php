<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="sample_db";

    $conn=new mysqli($host,$user,$password,$db);

    if($conn->connect_error){
        echo "error connecting ".$conn->connect_error;
    }
    //else
      //  echo "connection successfull";

?>







