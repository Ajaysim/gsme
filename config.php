<!-- connection establishment  -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "gsme";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("connection faild:" . mysqli_connect_error());
} else {
    // echo"connection successful";
}
?>