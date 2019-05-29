<?php
include 'include/bootstrap.php';

$userType = $_POST["userType"];
$user = $_POST["user"];

User::changeAdmin($userType, $user);
