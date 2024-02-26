<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
     $(document).ready(function () {
    
    $('nav ul').animate({
        marginRight: '20%' 
    }, 800);

    $('header h2').animate({
        marginRight: '10%' 
    }, 800);

    $('header img').addClass('hidden');

    var currentPage = window.location.href;
    $('nav ul li a').filter(function() {
        return this.href == currentPage;
    }).parent().addClass('current');

    $('nav ul li a').filter(function() {
        return this.href == currentPage;
    }).addClass('active');

    $('.toggle-tab-btn').click(function () {
        $('.small-tab').slideToggle();
    });

    
    $('nav ul li').hover(function() {
        $(this).addClass('hovered');
    }, function() {
        $(this).removeClass('hovered');
    });
});
    </script>
    <title>Your Portfolio - CV</title>
</head>
<body>
    <header>
        <h1>CV</h1> <img src="images/DC.jpg" alt="images/DC" width="100" height="75"> <h2>Drenthe College</h2>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sport.php">Sports</a></li>
            <li><a href="home_country.php">Home Country</a></li>
            <li><a href="SC.php">Studies and college</a></li>
            <li><a href="CV.php">CV</a></li>
            <li><a href="SP.php">School projects</a></li>
            <li><a href="PC.php">Personal projects</a></li>
        </ul>
        
        <button class="toggle-tab-btn">Contact</button>
    </nav>
    
    <div class="small-tab">
        <p>Telefoon nummer: 0616416074</p>
        <p>Email: cyrusbot1973@gmail.com</p>
        <p>Woon plaats: Emmer-Compascuum</p>
        <p>Postcode: 7881LR</p>
        
    </div>
    
    <section>
        <button onclick="location.href='Files/CV-C.Moradi.pdf'" download="CV-C.Moradi.pdf">Open CV PDF</button>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cyrus . All rights reserved.</p>
    </footer>
</body>
</html>
