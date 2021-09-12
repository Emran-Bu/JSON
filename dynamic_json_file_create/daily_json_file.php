<?php

$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Error");

$sql = "SELECT * FROM student_info";

$result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);

$file_name = "my-" . date("d-m-Y") . ".json";

if (file_put_contents("json_file/{$file_name}" ,$json_data)) {
    echo $file_name . "<br> JSON File Created.";
} else {
    echo "Can't Insert in JSON File.";
}

?>