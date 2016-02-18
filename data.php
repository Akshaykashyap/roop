<?php
var_dump($_POST);
 $name =$_POST["name"];
 $email =$_POST["email"];
 $pwd =$_POST["password"];
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "info";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO php (name, email, password) values('$name','$email','$pwd')";
//echo $sql; die;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

