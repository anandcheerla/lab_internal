<html>

<head>

    <style>
    .indiv{

        
        margin-left:100px;
        margin-right:100px;
    
    }
    .headdiv{
        padding:30px;
        background-color:green;
        text-align:center;
    }
    .aa{
        margin-left:600px;

    }
    

    </style>

</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION['username']))
            header("location:homelogin.php");

    ?>

        <div class="headdiv">
            <h1 class="head1">NEWS</h1>
        </div>
        <br>
        <a href="login.php" class="aa">LOGIN</a>

    <marquee><h2>Please Login to make full use</h2></marquee>
  <div>
    <div class="indiv">

    <?php

        include "connect.php";
        $qry="select * from news_db";
        $re=$conn->query($qry) or die("Query failed");

       //echo "count is".$re->num_rows;
        $var=glob("uploads/*.*");
        //echo "<div>";
          //  echo "<div class="indiv">";
        for($i=0;$i<$re->num_rows;$i++){
            $row=$re->fetch_assoc();
            echo "<br>";
            echo "<div>";
                echo "<img src='".$var[$i]."' width=100 height=100>";
            echo "</div>";
            echo "<br>";
            echo "<div>";
                echo "this is ".$row["text"];
            echo "</div>";
        }
          //  echo "</div>";
        //echo "</div>";
    ?>


   </div>
   </div>
   


</body>

</html>