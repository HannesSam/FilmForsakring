<?php
require 'include/bootstrap.php';
session_start();

$title = $_POST["title"];;
$result = Post::getPosts($title);
while ($row = $result->fetch_assoc()) {
    $userID = $row["userID"];
    $email =  User::getUserName($userID);
   
        if($_SESSION['admin'] == 1){
          
     
          echo '<div class="popUp2"">
          <div class="reviewContainer">' .
  
          '<p>' . $row["stars"] . '</p>' .' 
        
          <p class ="review">'. $row["review"] .' </p>  
          <br>
  
          <p class="email">
          Skrivet av: ' . $email['email'] .' </p>
          <br>
          <button class="button" type="button" >Remove review?</button>
            </div>   
            </div>';

        }
        else {

          echo '<div class="popUp2"">
          <div class="reviewContainer">' .
  
          '<p>' . $row["stars"] . '</p>' .' 
        
          <p class ="review">'. $row["review"] .' </p>  
          <br>
  
          <p class="email">
          Skrivet av: ' . $email['email'] .' </p>
          <br>
     
            </div>   
            </div>';
        }
        
}
