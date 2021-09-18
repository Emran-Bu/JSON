<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php_json_encode_function</title>
</head>
<body>
    
    <div id="main">
        <div id="header">
            <h1>php_json_encode_function</h1>
        </div>

        <div id="loadData">

            <table id="loadTable" border="1" width="100%" style="border-collapse: collapse; text-align : center">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>City</th>
                </tr>
            </table>    

        </div>
        <div id="responseid">
            <div id="response"></div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){

            $.ajax({
                url : "fetch-json.php",
                type : "POST",
                data : { id : 4 },
                dataType : "JSON",
                success : function(data){
                    $.each(data, function(key, value){
                        // $('#loadTable').append(value.id + " . " + value.name + " " + value.age + " " + value.city +  "<br>" + "<br>");

                        $('#loadTable').append("<tr><td>" + value.id + "</td><td>" + value.name + "</td><td>" + value.age + "</td><td>" + value.city + "</td></tr>");
                    })
                    // console.log(data); 
                }
            })

            // $.getJSON(
            //     "fetch-json.php",
            //     function(data){
            //         $.each(data, function(key, value){
            //             $('#loadData').append(value.id + " . " + value.name + " " + value.age + " " + value.city +  "<br>" + "<br>");
            //         })
            //         console.log(data);
            //     }

            // )

        })
    </script>
</body>
</html>