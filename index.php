<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>JSON_Read_Data</title>
</head>
<body>
    
    <div id="main">
        <div id="header">
            <h1>JSON_Read_Data</h1>
        </div>

        <div id="loadData">

            
        </div>
        <div id="responseid">
            <div id="response"></div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){


            $.ajax({
                // url : ""https://jsonplaceholder.typicode.com/posts/1"",
                url : "json-data/json-data.json",
                type : "POST",
                success : function(data){
                    $.each(data, function(key, value){
                        $('#loadData').append(value.id + " . " + value.title + "<br>" + value.body + "<br>" + "<br>");
                        // console.log(value.id + " " + value.title + " " + value.body);
                })
            }

            })



            // Use getJson
            // $.getJSON(
            //     // "https://jsonplaceholder.typicode.com/posts",
            //     "json-data/json-data.json",

            //     function(data){
            //         $.each(data, function(key, value){
            //             $('#loadData').append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>");
            //             // console.log(value.id + " " + value.title + " " + value.body);
            //         })
            //     }
            // );

        })
    </script>
</body>
</html>