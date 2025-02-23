
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style.css">

    <style>
        #secret {
            display: none; /* Initially hidden */
        }
    </style>
</head>
<body>

    <button id="show">Show</button>
    <button id="hide">Hide</button>
    <div id="secret">Hi There!</div>

    <script>
        $(document).ready(function(){
            $("#show").click(function(){
                $("#secret").show(); // Show the div
            });

            $("#hide").click(function(){
                $("#secret").hide(); // Hide the div
            });
        });
    </script>

</body>
</html>