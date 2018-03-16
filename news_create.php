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
    <body>
    <div class="headdiv">
        <h1 class="head1">NEWS</h1>
        </div>
        <?php
            include "connect.php";

            if(isset($_POST["nsubmit"])){
                $target="uploads/";
                $text=$_POST["textadd"];
            
                $file=$_FILES["imagefile"]["name"];
               
                
                $target=$target.$file;
               

                $qry="insert into news_db(id,text,file,date) values ('','$text','$file','')";

                $re=$conn->query($qry) or die("connection failed");

                if(isset($_FILES["imagefile"]))
                {
                
                    move_uploaded_file($_FILES["imagefile"]["tmp_name"],$target);
                }
            }
        
        ?>

        <h1>Post News</h1><br>
        <form method="post" action="news_create.php" enctype="multipart/form-data">
            News to be displayed:<br>
            <textarea name="textadd" rows="8",cols="100"></textarea>
            File:
            <input name="imagefile" type="file" >

            <input type="submit" name="nsubmit" value="upload">

        </form>
        If you want to logout:
        <a href="logout.php">Logout</a>
    </body>

</html>