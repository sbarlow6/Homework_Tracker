<?php session_start(); ?>
<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Login | Site Name</title>
                <link href="./css/style.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    </head>

    <body id="test">
        <div id="allcontent">
        <header>
            <h1>Login | Site Name</h1>
            <div id="tools">
                <?php
                include 'meta.php';
                ?>  
            </div>
        </header>
        <main>
            <h3>Login</h3>
            <?php
            if (isset($message)) {
                echo "<p> $message </p>";
            }
            ?>
            <p>All fields are required.</p>
            <!--needs an action attribute which takes the info and passes it over to the form which is in a different location. The method tells how to get the information POST and GET.-->
            <form action="index.php" method="post">
                <fieldset>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" ><br>
                    <label>Password</label>
                    <input type="password" name="password" id="password">

                    <label>&nbsp;</label>
                    <input type="submit" name="action" value="Login"><br>
                </fieldset>
            </form>
        </main>
        <footer>
            <small></small>
        </footer>
        </div>
    </body>

</html>

