<?php 

        function topnav(){
            
            session_start();    

            if(isset( $_SESSION['admin'] ) ){

                echo '
                    <div class="topnav">
                    <a href="index.php">  Hem <i class="fas fa-search"></i></a>
                    <a href="forum.php">Forum <i class="far fa-edit"></i></a>
                    <a href="admin.php">Admin <i class="fas fa-user-shield"></i></a>
                    <a href="loggout.php">Logga ut <i class="fas fa-sign-out-alt"></i></a>
                </div>';
            }
            
            else if ( isset( $_SESSION['userID'] ) ) 
            {
                echo '
                    <div class="topnav">
                    <a href="index.php">  Hem <i class="fas fa-search"></i></a>
                    <a href="forum.php">Forum <i class="far fa-edit"></i></a>
                    <a href="loggout.php">Logga ut <i class="fas fa-sign-out-alt"></i></a>
                </div>';
            }
            else 
            {
                 echo '
                    <div class="topnav">
                    <a href="index.php">  Hem <i class="fas fa-search"></i></a>
                    <a href="register.php">Registrera dig <i class="fas fa-user-edit"></i></a>
                    <a href="login.php">Logga in <i class="fas fa-sign-in-alt"></i></a>
                </div>';
            }

        }
    

?>