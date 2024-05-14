<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aartidb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['paswword'];
   

    // Insert user data into the database
    $sql = "INSERT INTO `info` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');)";

    if ($conn->query($sql) === TRUE) {
      echo "<script> alert('Data Inserted successful') </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT username, password FROM users";
$result = $conn->query($sql);

$data=[];

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo " - username: " . $row["username"]. " - password: " . $row["password"]. "<br>";
        $data[]=$row;
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>