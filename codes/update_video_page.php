<?php
    $id = $_GET["id"];
    $link = $_GET['link'];
    $desc = $_GET['desc'];

?>
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
    <h2>Update The Video</h2>
    <br>
        <div style="border:1px solid;padding:10px;height:auto;" >
            <div class="text-right" >
                <form action="home.php" method="get">
                    <input type='submit' class='btn btn-danger' value='Cancel'>
                </form>
            </div>
            <form action="update.php" method="post">
                <div class="text-center" style="margin:10px;">
                    <label id="insert" for="">Youtube link:</label>
                    <input type="text" class="textbox" id="pre_id" name="pre_id" value="<?php echo $id ?>" hidden/>
                    <input type="text" class="textbox" id="new_link" name="new_link" value="<?php echo $link ?>" required/>
                </div>
                <div class="text-center" style="margin:10px;">
                    <label id="insert" for="">Description:</label>
                    <input type="text" class="textbox" id="new_descr" name="new_descr" value="<?php echo $desc ?>" required/>
                </div>
                <input type='submit' class='btn btn-success' id='save_changes' name='save_changes' value='Save'>
            </form>
        </div>
    
	</div>
    

</body>
</html>