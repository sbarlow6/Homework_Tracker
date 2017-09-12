<?php
                $loggedin = $_SESSION['loggedin'];
                $firstName = $_SESSION['firstname'];
                $userType = $_SESSION['usertype'];
                

     if ($loggedin && ($userType = 'user')) {
                    echo '<span>Welcome '.$firstName.'</span> | 
                <a href=".?action=Logout" title="Log out of the site">Logout</a>';
                }
                else {
                    echo '<a href= ".?action=Register" title= "Go to the registration page">Register</a> | <a href=".?action=signin" title="Login to the site">Login</a>';
                }

                ?>          
