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
    .comm{
        padding-left:500px;
        padding-top:30px;

    }
    

    </style>

</head>

<body>
    

        <div class="headdiv">
           <h1 class="head1">NEWS</h1>
        </div>

  <div>
    <div class="indiv">

    <?php
        session_start();
        include "connect.php";
        $qry="select * from news_db";
        $re=$conn->query($qry) or die("Query failed");


       //echo "count is".$re->num_rows;
        $var=glob("uploads/*.*");
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
   <br>

       IF YOU WANT TO LOGOUT: <a href="logout.php">Logout</a>
    
    <div class="comm">
    Please Enter your Comments below:
    <form action="comment.php" method="post">
       <input type="text" name="comment">
       <input type="submit" name="sub"> 
        
    </form>
    </div>

</body>

</html>