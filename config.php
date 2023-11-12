<?php
$host = 'localhost';
$db = 'CV';
$user = 'fina';
$pwd = 'oke';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
