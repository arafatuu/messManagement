<!DOCTYPE html>
<html>
<head>
<title>Login | Mess Management</title>
<?php
include 'header.php';
?>
</head>

<body>
<div class="login-head title">
     <h2>Login</h2>
</div>
<form method="post" action="process.php">
<div class="input-group">
<label>User Name</label>
<input type="text" name="userName">
</div>
<div class="input-group">
<label>Password</label>
<input type="password" name="password">
</div>
<div class="input-group">
<button type="submit" class="btn" name="loginUser">Login</button>
</div>
</form>

</body>
</html>