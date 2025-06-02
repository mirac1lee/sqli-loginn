<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "sqli_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Hoşgeldiniz, $username!";
} else {
    echo "Geçersiz kullanıcı adı veya şifre.";
}
?>
