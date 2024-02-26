<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
   $(document).ready(function () {
            var currentPage = window.location.href;

            $('nav ul li a').filter(function () {
                return this.href == currentPage;
            }).parent().addClass('current');

            $('nav ul li a').filter(function () {
                return this.href == currentPage;
            }).addClass('active');

            $('nav ul li').hover(function () {
                $(this).addClass('hovered');
            }, function () {
                $(this).removeClass('hovered');
            });

            $('.signup-form').hide();

            $('#OCbtn1').click(function () {
                $('.signup-form').toggle();
                $('#OCbtn1').hide();
            });

            $('.signup-form button').click(function () {
                $('.signup-form').hide();
                $('#OCbtn1').show(); 
            });
            
        });
    </script>    
    <title>shapedbymoradi</title>
    </head>
    <header>
         <h1>1 on 1 Coching</h1> 
         <img src="images/main.png" alt="main">
    </header>
    <body>

    <nav>
        <ul>
        <li><a id=home href= index.php>Home</a></li>
            <li><a id=diet href= "Diet.php">Diet Program <a></li>
            <li><a id=diet href= "WO.php">Workout Program<a></li>
            <li><a id=diet href= "11.php">1 on 1 coaching <a></li>
            <li><a id=diet href= "OC.php">Online coaching <a></li>
        </ul>
    </nav>
        <div class="onetxt">
        <h2>Introduction:</h2>
            <p>Welcome to Shaped by Moradi, where we are dedicated to helping individuals transform their fitness journey and achieve their dream physiques. Our commitment to your success goes beyond generic training programs – we offer personalized 1 on 1 physical coaching to elevate your fitness experience.</p>
        <br>
        <h2>Availability:</h2>
            <p>Our exclusive 1 on 1 coaching option is tailored for those residing in the Netherlands, specifically in the cities of Emmen, Amsterdam, Assen, Groningen, Rotterdam, Den Haag, and Utrecht. We understand the importance of hands-on guidance, and that's why this personalized coaching is limited to these locations.</p>
        <br>
        <h2>Tailored Coaching Approach:</h2>
            <p>Experience a fitness journey like never before with our specialized 1 on 1 coaching. Our certified coaches at Shaped by Moradi are here to provide personalized attention, custom-tailored workout plans, and expert guidance to ensure you reach your fitness goals efficiently. Whether you are a beginner or an experienced fitness enthusiast, our coaching is designed to meet your unique needs.</p>
        <br>
        <h2>How to Get Started:</h2>
            <p>Ready to take your fitness to the next level? If you reside in the Netherlands and are in one of our specified cities, don't miss the opportunity for exclusive 1 on 1 physical coaching. Contact us today to schedule your personalized coaching sessions and embark on a transformative fitness journey with Shaped by Moradi.</p>
        </div>
        <section>
        <div class= "ocbtn1">
            <h2>Want to sign up for our 1 on 1 coaching program?</h2>
            <button id=OCbtn1 onclick="buttonClicked()">Click here!</button>
        </div>
            <div class="signup-form">
            <h2>Sign up for our Online coaching program</h2>
            <form action="#" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Sign Up</button>
            </form>
        </section>
    </div>
        <footer>
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
    </footer>

    </body>
</html>