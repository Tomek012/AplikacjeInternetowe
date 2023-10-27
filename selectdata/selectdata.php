<?php   

$servername = "localhost";
$username = "root";
$password = "";
$database = "baza2";

$conn = mysqli_connect($servername, $username, $password, $database );

$sql = "SELECT id, imie, nazwisko FROM guests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["imie"]. " " . $row["nazwisko"] . "<br>";
    }
} else {
    echo "0 results";
}

?>
