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
        marginRight: '30%' 
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
    <title>Your Portfolio - School and College</title>
</head>
<body>
    <header>
        <h1>Studies and college</h1> <img src="images/DC.jpg" alt="images/DC" width="100" height="75"> <h2>Drenthe College</h2>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sport.php">Sports</a></li>
            <li><a href="home_country.php">Home Country</a></li>
            <li><a href="SC.php">Studies and college</a></li>
            <li><a href="CV.php">CV</a></li>
            <li><a href="SP.php">School projects</a></li>
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
        <h2>Diploma and education</h2>
        
        <img src="images/DC.jpg" width="250" height="220">
        <img src="images/EC.jpg" width="250" height="220">
        <h2>Esdal college</h2>
        <p>I spent my highschool years at the Esdal college and recieved my VMBO 4 (Groen technick) diploma. In those years I was first introduced to writing codes and programming for the first time and so they say it was love in the first sight. </p>
        <h2>Drenthe college</h2>
        <p>I have spent the last two years studying software developer (MBO 4) at the Drenthe college and have learnt alot so far. I have to admit that my love and intrest for writing codes and programming is growing by the day.</p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cyrus . All rights reserved.</p>
    </footer>
</body>
</html>
