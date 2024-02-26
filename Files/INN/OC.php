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

            $('#OCbtn').click(function () {
                $('.signup-form').toggle();
                $('#OCbtn').hide();
            });

            $('.signup-form button').click(function () {
                $('.signup-form').hide();
                $('#OCbtn').show(); 
            });
            
        });
    </script>
    <title>shapedbymoradi</title>
    </head>
    <header>
         <h1>Online Coaching</h1> 
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

        <div class= "ocbtn">
            <h2>Looking for our online coaching program?</h2>
            <button id=OCbtn onclick="buttonClicked()">Click here!</button>
        </div>
   
        <section>
            <div class="signup-form">
            <h2>Sign up for our Online coaching program</h2>
            <form action="#" method="post">
                <label for="Name">Name:</label>
                <input type="text" id="Name" name="Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

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