<?php 
        function topnav(){
            
            session_start();    

            if ( isset( $_SESSION['user'] ) ) 
            {
                echo '
                    <div class="topnav">
                    <a href="index.php">Hem</a>
                    <a href="forum.php">Forum</a>
                    <a href="loggout.php">Logga ut</a>
                </div>';
            }
            else 
            {
                 echo '
                    <div class="topnav">
                    <a href="index.php">Hem</a>
                    <a href="register.php">Registrera dig</a>
                    <a href="login.php">Logga in</a>
                </div>';
            }

        }
    

?>