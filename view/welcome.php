<?php session_start(); 
$loggedin = $_SESSION['loggedin'];
$firstname = $_SESSION['firstname'];
$usertype = $_SESSION['usertype'];
$user_id = $_SESSION['userId'];
?>
<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Welcome User</title>
	<link href="./css/style.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>
    <div id="allcontent">

    <header>
        <h1>Welcome | Assignment Tracker</h1>
		<div id="tools">
                <?php
          include 'meta.php';
                ?>  
                </div>
	</header>
	<main>
                
                <?php
                if($usertype == 'user') {
                   
                   include 'display.php';
                   
                    }
                    else {
                        echo "<p>Welcome! Please log in or register.</p> <a href=https://youtu.be/1E-jY6-sNVk>Project Video Link</a>" ;
                    }
                ?>
                <BR><BR><BR><BR><BR><BR><BR>

	</main>
	<footer>
	</footer>
    </div>
</body>

</html>

