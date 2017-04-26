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

        <h2>Results</h2>
           <form action="index.php" method="post">
            <?php
                if  (mysqli_num_rows($result) > 0) {
                    // we have data:
                    //output the data

                echo "<select name='firstPlayers' class='form-control'>";
                echo "<option value=''>Select Player 1</option>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option>".$row["name"]."</option>";
                }
                    echo "</select><br>";

                } else {
                    echo "No results!";
                }

               mysqli_close($conn);
            ?>

            <input type="radio" name="result" value="W">Win <br>
            <input type="radio" name="result" value="D">Draw <br>
            <input type="radio" name="result" value="L">Lost <br>

            <label for="promethium">Promethium Scored</label> <br>
            <input type="number" name="cach"> <br><br>
            <input type="submit" name="addResult" value="Submit">
        </form>

        <br>

        <?php
            echo "<select name='secondPlayers' class='form-control'>";
            echo "<option value=''>Select Player 2</option>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<option>".$row["name"]."</option>";
                }
            echo "</select><br>";
        ?>


    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
