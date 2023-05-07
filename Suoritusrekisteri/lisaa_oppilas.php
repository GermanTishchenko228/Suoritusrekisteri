<?php
// Get the form data from the $_POST array
$nimi = $_POST['nimi'];
$sukunimi = $_POST['sukunimi'];
$matematiikan_arvosana = $_POST['matematiikan_arvosana'];
$kemian_arvosana = $_POST['kemian_arvosana'];
$fysiikan_arvosana = $_POST['fysiikan_arvosana'];

// Add any other form fields here

// Connect to the database (replace with your own database credentials)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors in the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the database
$sql = "INSERT INTO oppilaat (nimi, sukunimi, matematiikan_arvosana, kemian_arvosana, fysiikan_arvosana) VALUES ('$nimi', '$sukunimi', '$matematiikan_arvosana', '$kemian_arvosana', '$fysiikan_arvosana')";
// Add any other form fields to the SQL query here

if ($conn->query($sql) === TRUE) {
  echo "Uusi oppilas lisätty!";
} else {
  echo "Virhe: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
