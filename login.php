<?php
  include('layouts/css.php');
  ?>
  <title>Login Page - Batik Mantap</title>
  <link rel="stylesheet" href="assets/css/login.css">
<div class="login">
	<h1>Login</h1>
    <form method="post" action="controller/ceklogin.php">
    	<input type="text" name="username" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        <a class="btn btn-primary btn-block btn-medium" href="index.php">Home</a>
    </form>
</div>