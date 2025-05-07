<?php
include ('./koneksi.php');
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'"; 

$result = $koneksi->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['username'] = $username; 

 header("Location: index.php?login=sukses"); 

} else { 

 echo "Login gagal. <a href='login.php'>Coba lagi</a>"; 

} 

?>