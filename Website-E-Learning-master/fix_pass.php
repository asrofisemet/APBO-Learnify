<?php
$hash = password_hash("123456", PASSWORD_DEFAULT);
$mysqli = new mysqli("localhost", "root", "", "learnify");
$mysqli->query("UPDATE guru SET password = '$hash'");
echo "Passwords updated successfully.";
?>
