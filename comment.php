<?php
        session_start();
        include "connect.php";
         if(isset($_POST["sub"])){
            
            $text=$_POST["comment"];
            // echo "text :".$text;
            echo "<br>";
            $temp=$_SESSION["username"];
            //echo "temp:".$temp;
            $qry="insert into comments(id,username,text) values ('','$temp','$text')";
    
            $result=$conn->query($qry) or die("query failed".$conn->error);
    
            header("location:homelogin.php");
        }
    

    ?>