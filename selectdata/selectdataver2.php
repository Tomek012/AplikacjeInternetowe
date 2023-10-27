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
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>" . $row[0]. " </tr></td> " . $row[1]. "<td><tr> " . $row[2] . "</td></tr>";
    }
} else {
    echo "0 results";
}

?>
