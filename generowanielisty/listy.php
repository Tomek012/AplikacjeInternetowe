<style>
    table{
        border-collapse: collapse;
    }

    table,td{
        border: 1px solid;
    }
</style>


<?php   


$servername = "localhost";
$username = "root";
$password = "";
$database = "baza2";

$conn = mysqli_connect($servername, $username, $password, $database );

$sql = "SELECT id, imie, nazwisko FROM guests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while($row = mysqli_fetch_row($result)) {
        echo "<li>" . $row[0] . " " . 
        $row[1] . " " . $row[2] . "</li>";
    }
echo "</ul>";
} else {
    echo "0 results";
}
    

?>
