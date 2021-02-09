
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</head>

    <body class="text-center">
    <!--Navbar-->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="home.php">
                    Video Admin
        </a>
        <form method='post' action="add_video_page.php">
            <input type="submit" value="Add New Video" name="add_video">
        </form>
    </nav>
    <br>
	<div class="container">
    <h2>Add Video</h2>
    <br>
        
        <div style="border:1px solid;padding:10px;height:auto;" >
            <div class="text-right" >
                <form action="home.php" method="get">
                    <input type='submit' class='btn btn-danger' value='Cancel'>
                </form>
            </div>
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                <div class="text-center" style="margin:10px;">
                    <label id="insert" for="">Youtube link:</label>
                    <input type="text" class="textbox" id="yt_link" name="yt_link" placeholder="Link" required/>
                </div>
                <div class="text-center" style="margin:10px;">
                    <label id="insert" for="">Description:</label>
                    <input type="text" class="textbox" id="yt_descr" name="yt_descr" placeholder="Description" required/>
                </div>
                <input type='submit' class='btn btn-success' id='save_new_video' name='save_new_video' value='Save'>
            </form>
        </div>
        
	</div>
<?php
include "config.php";


if(isset($_POST['save_new_video'])){ //check if form was submitted
    $input_link = $_POST['yt_link']; //get input text
    $input_desc = $_POST['yt_descr']; 
    //current_date
    $date = date('Y-m-d');
    
    $sql_query = "insert into videos (link, description, date_added, is_deleted)
    values ('$input_link', '$input_desc', '$date' ,0)";
    if (mysqli_query($con,$sql_query) === TRUE) {
        $message =  " Record Added Successfully";
        echo "<script type='text/javascript'>alert('$message');window.location.replace('home.php');</script>";
      } else {
        $message =  "Error!!!";
        echo "<script type='text/javascript'>alert('$message');window.location.replace('home.php');</script>";
      }
    
    
    #$message = "Success! You entered: ".$input;
  }    
  
?>
		
</body>
</html>