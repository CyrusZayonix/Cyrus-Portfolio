<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('header h1').animate({
                marginRight: '85%' 
            }, 800); 
        });
        $(document).ready(function () {
            $('nav ul').animate({
                marginRight: '40%' 
            }, 800); 
        });
    </script>
    <title>Your Portfolio - Sports</title>
</head>
<body>
    <header>
        <h1>Sports</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sport.php">Sports</a></li>
            <li><a href="home_country.php">Home Country</a></li>
            <li><a href="SC.php">Studies and college</a></li>
            <li><a href="CV.php">CV</a></li>
        </ul>
    </nav>
    
    <section>
        <h2>Sports</h2>
        <p>On this page you are going to learn about my favorite sports and my All Time Personal records (Pr's)</p>
        <h2>Here are my all time PR's</h2>
        <p>Squats 175kg 3x</p>
        <p>Squats 160kg 6x</p>
        <p>incline dumbbell bench press 36kg(each) 7x</p>
        <p>Leg extentions 112kg 33x</p>
        <p>Dumbbell shoulder press 30kg 7x</p>
        <p>Lateral raises 20kg(each) 10x</p>
        <p>close grip T bar rows 100 kg 7x</p>
        <p>Barbell rows 120kg 8x</p>


        <img src="images/squat.jpg" width="250" height="300">
        <img src="images/gym.jpg" width="300" height="300">
        <img src="images/cj.jpg" width="300" height="300">
    </section>
    <section>

    </setion>    
    <footer>
        <p>&copy; <?php echo date("Y"); ?>  Cyrus . All rights reserved.</p>
    </footer>
</body>
</html>