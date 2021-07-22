<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "dbWIS";
$sql = "";

function dbQuery($serverName, $userName, $password, $dbName, $sql)
{
// Create connection
    $conn = new mysqli($serverName, $userName, $password, $dbName);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $res = array();
        while ($row = $result->fetch_assoc()) {
            array_push($res, $row);
        }
        return $res;
    } 
    
    else {
        $res = "0 results";
        return $res;
    }

    $conn->close();
}

?>
