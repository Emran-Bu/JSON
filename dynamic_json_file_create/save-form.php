<?php

    if ($_POST['fullname'] != '' && $_POST['age'] != '' && $_POST['gender'] != '' && $_POST['country'] != '') {
        if(file_exists('json_file/form_data.json')){
            $current_data = file_get_contents('json_file/form_data.json');
            $array_data = json_decode($current_data, true);
            $new_data = array(
                'name' => $_POST['fullname'],
                'age' => $_POST['age'],
                'gender' => $_POST['gender'],
                'country' => $_POST['country']
            );
    
            $array_data[] = $new_data;
            $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

            if (file_put_contents('json_file/form_data.json', $json_data)) {
                echo "<h3>Successfully saved data in JSON file.</h3>";
            } else {
                echo "<h3>Unsuccessfully saved data in JSON file.</h3>";
            }

        } else {
            echo "<h3>Json File Not Exits.</h3>";
        }
    } else {
        echo "<h3>All From are required.</h3>";
    }

?>