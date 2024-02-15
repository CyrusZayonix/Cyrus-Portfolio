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
                marginRight: '90%' 
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
        <h1>CV</h1>
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
        <button onclick="location.href='Files/CV-C.Moradi.pdf'" download="CV-C.Moradi.pdf">Open CV PDF</button>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cyrus . All rights reserved.</p>
    </footer>
</body>
</html>
