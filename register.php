<html>
    <head>
    <style>

    .headdiv{
        padding:30px;
        background-color:green;
        text-align:center;
    }
    
    </style>

    </head>


    <?php
    include "connect.php";

        if(isset($_POST["regsubmit"])){
            $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $username=$_POST["username"];
            $password=$_POST["password"];
            $confirmpassword=$_POST["confirmpassword"];
            $email=$_POST["email"];

            $qry="insert into sample_table(firstname,lastname,username,password,confirmpassword,email) values ('$firstname','$lastname','$username','$password','$confirmpassword','$email')";

            $result=$conn->query($qry) or die("query failed".$conn->error);

            header("location:login.php");
        }
        
    ?>
    
    <body>
    <div class="headdiv">
        <h1 class="head1">NEWS</h1>
        </div>
        <h1>REGISTER</h1>
        <form method="post" action="register.php">
            firstname:<input type="text" name="firstname"><br><br>       
            lastname:<input type="text" name="lastname"><br><br>
            Username:<input type="text" name="username"><br><br>
            Password:<input type="password" name="password"><br><br>
            confirmpassword:<input type="password" name="confirmpassword"><br><br>
            email:<input type="text" name="email"><br><br>
            <input type="submit" name="regsubmit">

        </form>


    </body>


</html>