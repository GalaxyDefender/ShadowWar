<?php

include("connection.php");

$query = "SELECT * FROM players";
$result = mysqli_query($conn, $query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Shadow War Campaign
    </title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>
            Shadow War Campaign
        </h1>

        <h2>List of Players</h2>
           <table class="table table-bordered table-hover">
             <tr>
                <th>Player Name</th>
                <th>P</th>
                <th>W</th>
                <th>D</th>
                <th>L</th>
                <th>Promethium Caches</th>
            </tr>
            <?php
                if  (mysqli_num_rows($result) > 0) {
                    // we have data:
                    //output the data


                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr><td>".$row["name"]."</td><td>"
                        .$row["played"]."</td><td>"
                        .$row["wins"]."</td><td>"
                        .$row["draws"]."</td><td>"
                        .$row["losses"]."</td><td>"
                        .$row["caches"]."</td></tr>";
                }

                } else {
                    echo "No results!";
                }

               mysqli_close($conn);
            ?>
        </table>
        <form action="insert.php">
            <button type="submit">Enter Results</button>
        </form>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
