<?php
$servername = "system@//ACER-ASPIRE-5-H:1521/xe";
$database = "kelompok2";
$username = "system";
$password = "system";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO Siswa (name, lastname, email) VALUES ('Thom', 'Vial', 'thom.v@some.com')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>