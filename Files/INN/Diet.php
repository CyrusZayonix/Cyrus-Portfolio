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
    $('nav ul li a').filter(function() {
        return this.href == currentPage;
    }).parent().addClass('current');

    $('nav ul li a').filter(function() {
        return this.href == currentPage;
    }).addClass('active');
    $('nav ul li').hover(function() {
        $(this).addClass('hovered');
    }, function() {
        $(this).removeClass('hovered');
    });
});
    </script>    
    <title>shapedbymoradi</title>
    </head>
    <header>
         <h1>Diet Program</h1> 
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
    <div class="info-txt">
    <h2>Personalized Nutrition at Your Fingertips:</h2>
    <p>Embark on a journey to optimal health with Shaped by Moradi's cutting-edge diet webpage. Simply enter your information, and within a week, receive a meticulously crafted diet tailored specifically for your body and body type. Our expert nutritionists take into account your unique needs, preferences, and goals to provide you with a personalized and sustainable dietary plan. It's time to fuel your fitness aspirations with a diet that truly works for you – start the transformation today!</p>
    </div>
    <div class="info-form">
            <h2>Sign up for our Personalized Diet and Nutrition program!</h2>
            <form action="#" method="post">
                <label for="name">Name:</label>
                <input type="name" id="name" name="name" required>

                <label for="last-name">Last Name:</label>
                <input type="last-name" id="last-name" name="last-name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for= "weight">Weight:</label>
                <input type="weight" id= "weight" name="weight" required>

                <label for= "length">Length:</label>
                <input type="length" id= "length" name="length" required>

                <label for= "age">Age:</label>
                <input type="age" id= "age" name="age" required>

                <label for= "goal">Goal:</label>
                <input type="goal" id= "goal" name="goal" required>

                <button type="submit">Sign Up</button>
            </form>
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