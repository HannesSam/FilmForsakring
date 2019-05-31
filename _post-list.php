<?php
require 'include/bootstrap.php';
session_start();

$title = $_POST["title"];;
$result = Post::getPosts($title);
while ($row = $result->fetch_assoc()) {
  $userID = $row["userID"];
  $email =  User::getUserName($userID);
  $stars = $row["stars"];

  if ($_SESSION['admin'] == 1) {

    echo '<div class="popUp2"">
          <div class="reviewContainer"> <p>';

    while ($stars > 0) {
      echo  '<span class="icon">★</span>';
      $stars--;
    }
    echo
      '</p> <p class ="review">' . $row["review"] . '</p>  
          <br>
  
          <p class="email">
          Skrivet av: ' . $email['email'] . '</p>
          <br>
          <button id="removeReview" class="button" type="button" value="' . $row["reviewID"] . '">Remove review?</button>
            </div>   
            </div>';
  } else {

    echo '<div class="popUp2"">
          <div class="reviewContainer"> <p>';

    while ($stars > 0) {
      echo  '<span class="icon">★</span>';
      $stars--;
    }
    echo
      '</p> <p class ="review">' . $row["review"] . '</p>  
          <br>
  
          <p class="email">
          Skrivet av: ' . $email['email'] . '</p>
          <br>
     
            </div>   
            </div>';
  }
}
