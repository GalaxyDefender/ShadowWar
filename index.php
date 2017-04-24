<?php

/*INSTEAD OF USING MYSQL, I'M JUST USING ARRAYS TO FETCH MY DATA
MYSQL WILL BE USED! */

//include("connection.php");
//
//$query = "SELECT * FROM players";
//$result = mysqli_query($conn, $query);

        $p1P = 3;
        $p1Pn = 0;
        $p1W = 0;
        $p1Wn = 0;
        $p1D = 0;
        $p1Dn = 0;
        $p1L = 0;
        $p1Ln = 0;
        $p1C = 0;
        $p1Cn = 0;

    $players = array
        (
        /*
            Array is as follows:
            - Player ID
            - Player Name
            - Player Games Played
            - Player Wins
            - Player Draws
            - Player Losses
            - Total Prometium Caches
        */
            array(1, "Quentin Gerard", $p1P, 0, 0, 0, 0),
            array(2, "John Doe", 0, 0, 0, 0, 0),
            array(3, "Jane Doe", 0, 0, 0, 0, 0),
            array(4, "Jim Doe", 0, 0, 0, 0, 0)
        );



       $p2P = 0;
       $p2W = 0;
       $p2D = 0;
       $p2L = 0;
       $p2C = 0;

        $newScore = $players[1][1] + 2;
        echo $newScore;

    if(isset($_POST["addResult"])){


    }

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

        <?php

        /* INSTEAD OF USING MYSQL, I'M JUST USING ARRAYS TO FETCH MY DATA
        MYSQL WILL BE USED! */

//            if  (mysqli_num_rows($result) > 0) {
//    // we have data:
//    //output the data
//
//    echo  "<table class='table table-bordered'><tr><th>ID</th><th>Player Name</th><th>Army Faction</th><th>Email</th></tr>";
//
//    while($row = mysqli_fetch_assoc($result)){
//        echo "<tr><td>".$row["id"]."</td><td>".$row["player_name"]."</td><td>".$row["army_faction"]."</td><td>".$row["email"]."</td></tr>";
//    }
//
//    echo "</table>";
//
//} else {
//    echo "No results!";
//}
//
//mysqli_close($conn);



        ?>

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
                foreach($players as $player){
                    echo "<tr class='$player[0]'>";
                    echo "<td>".$player[1]."</td>";
                    echo "<td>".$player[2]."</td>";
                    echo "<td>".$player[3]."</td>";
                    echo "<td>".$player[4]."</td>";
                    echo "<td>".$player[5]."</td>";
                    echo "<td>".$player[6]."</td>";
                    echo "</tr>";
                }
            ?>
        </table>

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        <?php
            echo "<select name='firstPlayers' class='form-control'>";
            echo "<option value=''>Select Player 1</option>";
                foreach($players as $player){
                    echo "<option>".$player[1]."</option>";
                }
            echo "</select><br>";
        ?>
            <input type="radio" name="result" value="W">Win <br>
            <input type="radio" name="result" value="D">Draw <br>
            <input type="radio" name="result" value="L">Lost <br>

            <label for="promethium">Promethium Scored</label> <br>
            <input type="number" name="cach">
        </form>

        <br>


        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
        <?php
            echo "<select name='secondPlayers' class='form-control'>";
            echo "<option value=''>Select Player 2</option>";
                foreach($players as $player){
                    echo "<option>".$player[1]."</option>";
                }
            echo "</select><br>";
        ?>
            <input type="submit" name="addResult" value="Submit">
        </form>

        <?php

            echo "<p>".$players[1][1]."</p>" ;
        ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
