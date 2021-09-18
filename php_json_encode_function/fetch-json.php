<?php

    $conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Error");

    $sql = "SELECT * FROM student_info where id = {$_POST['id']}";

    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);

    // echo "<pre>";
    // print_r($output);
    // echo "</pre>";

?>