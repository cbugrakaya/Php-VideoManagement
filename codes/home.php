
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
<script>

</script>
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
	<div class="container">
    <?php 
        include "config.php";
        $sql_query = "select * from videos where is_deleted=0";
        $result = mysqli_query($con,$sql_query);
        #$videos = mysqli_fetch_array($result);
        
        

        
        foreach($result as $video)
        {   $id_v = $video['id'];
            
            #split link for image
            $str =  $video['link'];
            $a  = explode("&",$str);
            $img_address = explode("=",$a[0]);
            $a = $img_address[1];
            #-----------
            
            $date = $video['date_added'];
            $desc = $video['description'];

            echo "<div style='border:1px solid;width:auto;height:140px;margin:20px;padding:10px;'>";
            echo "<a href='$str' target='_blank'>";
            echo "<img src= 'https://img.youtube.com/vi/$a/default.jpg' alt='thumnail' class='rounded float-left'>";
            echo "</a>";
            echo "<h6 class='text-left' style='padding-left:150px;'>",$desc,"</h3>";
            echo "<p class='text-left' style='padding-left:150px;'>Eklenme Tarihi: ",$date,"</p>";
            echo "<div class='container' >";
            echo "<form method='post' class='float-right' action='del_video.php?id=$id_v' style='padding-left:10px;'>";
            echo "<input type='submit' class='btn btn-danger' value='Delete' name='delete_video'>";
            echo "</form>";
            echo "<form method='post' class='float-right' action='update_video_page.php?id=$id_v&link=$str&desc=$desc'>";
            echo "<input type='submit' class='btn btn-success' id='update'value='Update' >";
            echo "</form>";
           
            echo "</div>";
            echo "</div>";
        }
        
        ?>
	</div>
		
</body>
</html>