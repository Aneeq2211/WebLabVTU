<!DOCTYPE html>
<html>
<body>
<style>
    table, td, th{border: 1px solid black;width: 33%;text-align: center;border-collapse:collapse;background-color:lightgreen;}
    table { margin: auto; }
</style>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "weblab";
    $a=[];
    $conn = mysqli_connect($servername, $username, $password, $dbname); 
    if ($conn->connect_error)
        die("Connection failed: ". $conn->connect_error);
    $sql = "SELECT * FROM student ORDER BY name";
    $result = $conn->query($sql);
    echo "<br>";
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th>USN</th><th>NAME</th><th>Address</th><th>Address</th></tr>"; 
    if ($result->num_rows> 0){
        while($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $row["usn"]."</td>";
            echo "<td>". $row["name"]."</td>";
            echo "<td>". $row["addr"]."</td>";
            echo "<td>". $row["email"]."</td></tr>";
            array_push($a,$row["usn"]);
        }
    }
    else
        echo "Table is Empty";echo "</table>";

    $conn->close();
?>
</body>
</html>