<?php  


$servername = "localhost";
$username = "root";
$password = "";
$database = "egzamin";


$conn = mysqli_connect($servername, $username, $password, $database);



$name = $_GET["imie"];
$nazwisko = $_GET["nazwisko"];
$sql = "INSERT INTO uczniowie (imie, nazwisko) VALUES ('$name', '$nazwisko')";
echo $sql;



if(mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "</br>" . mysqli_error($conn);
}




?>

