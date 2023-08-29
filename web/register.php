<?php

require "database/database.php";
require "views/include/header.html";

?>

<h1>Register</h1>
<form method="post" action="forms/new_user.php">
  <input type="hidden" id="id" name="id">
  <label for="first_name">First Name:</label><br>
  <input type="text" id="first_name" name="first_name" placeholder="First Name..."><br><br>
  <label for="last_name">Last Name:</label><br>
  <input type="text" id="last_name" name="last_name" placeholder="Last Name..."><br><br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" placeholder="Email..."><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" placeholder="Password..."><br><br>
  <input type="Submit" id="submit" name="submit" class="btn btn-primary">
</form>