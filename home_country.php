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
    <title>Your Portfolio - Home country</title>
</head>
<body>
    <header>
        <h1>Home Country</h1> <img src="images/DC.jpg" alt="images/DC" width="100" height="75"> <h2>Drenthe College</h2>
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
        <h2>My origin</h2>
        <p>This page is about where I orginate from and the culture and history of my home country Iran</p>
        <img src="images/vlag.png" width="350" height="200">
        <img src="images/kaart.jpg" width="200" height="200">
        <p>I was born and raised in Iran. In 2018 and at the age 12 I legally imigrated to the Netherlands with my family. The reason for our imigration is because of our christian back ground. Unfortunatly freedom of speech and believes is not a thing in my home country and you will recieve the highest punishment for it. </p>
        <br>
        <p>With all of that said I'm  still proud of my Iranian origin. Although my home country is now stuck with a radical islamic dictatorship, Iran has one of the richest histories and cultures on the planet and that's the reason why I would never renanounce my love for my Iranian origin. </p>
    </section>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cyrus. All rights reserved.</p>
    </footer>
</body>
</html>