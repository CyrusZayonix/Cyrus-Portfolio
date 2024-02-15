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
                marginRight: '75%' 
            }, 800); 
        });
        $(document).ready(function () {
            $('nav ul').animate({
                marginRight: '40%' 
            }, 800); 
        });
    </script>
    <title>Your Portfolio - Home</title>
</head>
<body>
    <header>
        <h1>Studies and college</h1>
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
    </nav>
    
    <section>
        <h2>Diploma and education</h2>
        
        <img src="images/DC.jpg" width="250" height="220">
        <img src="images/EC.jpg" width="250" height="220">
        <h2>Esdal college</h2>
        <p>I spent my highschool years at the Esdal college and recieved my VMBO 4 (Groen technick) diploma. In those years I was first introduced to writing codes and programming for the first time and so they say it was love in the first sight. </p>
        <h2>Drenthe college</h2>
        <p>I have spent the last two years studying software developer (MBO 4) at the Drenthe college and have leant alot so far. I have to admit that my love and intrest for writing codes and programming is growing by the day.</p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cyrus . All rights reserved.</p>
    </footer>
</body>
</html>
