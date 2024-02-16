<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    session_start();

    if(isset($_POST['gooi']) || !isset($_SESSION['dobbelsteen1'])) {


        //in de sessie wordt dobbelsteen1 en dobbelsteen2 gemaakt met een random getal
        $_SESSION['dobbelsteen1'] = rand(1,6);
        $_SESSION['dobbelsteen2'] = rand(1,6);

    }
    
    //Hier gaat die code weer runnen maar zonder die dobbelstenen code te runnen dit keer
 
        echo "<table id='myTable'>";
        for($row=0; $row<6; $row++) {    
            
            echo "<tr>";

            for($col=0; $col<6; $col++) {

                if($_SESSION['dobbelsteen1'] == $row+1 && $_SESSION['dobbelsteen2'] == $col+1) {
                    echo "<td style='border: 6px solid red;'>";
                } else if($_SESSION['dobbelsteen1'] == $row+1) {
                    echo "<td style='border: 3px solid black;'>";
                } else if($_SESSION['dobbelsteen2'] == $col+1) {
                    echo "<td style='border: 3px solid black;'>";
                } else {
                    echo "<td>";
                }

                echo "<img src='images/" .rand(7,13).".png' width='75' height='75'></td>";

            }
            echo "</tr>";
        }
        echo "</table>";
      // Hier worden de dobbelstenen weer geplakt maar ze gaan niet nog een keer runnen(dus we krrijgen het zelfde dobbelstenen)
        echo "<img src='images/" .$_SESSION['dobbelsteen1'].".png' width='75' height='75'>";
        echo "<img src='images/" .$_SESSION['dobbelsteen2'].".png' width='75' height='75'>";

 

    ?>

         
    <form method="POST">

        <input type='submit' value='Gooi' name='gooi'>
        <input type='submit' value='Renew' name='New game'>


    </form>
    
</body>
</html>