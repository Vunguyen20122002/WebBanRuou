<?php
    $servername = "localhost";
    $username = "admin";
    $password = "admin";
    $dbname = "pubmanager";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $table_name = $_GET['table_name'];
    //$table_name="taxinfo";

    // Get data from table
    $sql = "SELECT * FROM $table_name";
    $result = $conn->query($sql);

    // Convert data to JSON format
    $data = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                if (is_string($value)) {
                    $row[$key] = rtrim($value);
                }
            }
            $data[] = $row;
        }
    }
    echo json_encode($data);

    $conn->close();
?>
