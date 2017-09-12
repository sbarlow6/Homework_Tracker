<!doctype html>
<html>
    <head>
<?php session_start(); ?>
<?php require_once ('index.php');?>
<title>Registration</title>
        <link href="./css/style.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">


    </head>
    <body>
<div id="allcontent">
        <header>
            <h1>Site Name</h1>
            <div id="tools">
                <?php
          include 'meta.php';

                ?>          
            </div>
        </header>
        <main>
            <div class="container">
                <div class="row">
            <div class="col-md-12">
            <h3>Registration</h3>
            <?php
            if (isset($error)) {
                echo "<p> $error </p>";
            }
            ?>
            </div></div>
            <div class="row">
                <div class="col-md-12">
                    <p>All fields are required.</p>
                </div>
            </div>
            
            <form action="index.php" method="post" id="add_product_form">
                <fieldset>
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" <?php if (isset($first_name)) {
                echo "value='$first_name'";
                } ?>><br>
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" <?php if (isset($last_name)) {
                echo "value='$last_name'";
                } ?>><br>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" <?php if (isset($email)) {
                echo "value='$email'";
                } ?>><br>
                    <label>Password</label>
                    <input type="text" name="password" id="password">
                    <br>
                    <label>Confirm Password:</label>
                    <input type="text" name="password2" id="password2">
                    <br>
                    <label>&nbsp;</label>
                    <input type="submit" name="action" value="Register">
                </fieldset>
            </form>
            </div>
        </main>
</div>
    </body>

</html>
