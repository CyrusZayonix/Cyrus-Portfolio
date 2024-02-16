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

            
            $('.toggle-tab-btn').click(function () {
                $('.small-tab').slideToggle();
            });
        });

        $(document).ready(function () {
            $('header h2').animate({
                marginRight: '10%' 
            }, 800); 
        });

        $(document).ready(function () {
    
        $('header img').addClass('hidden');
        });

    </script>
    <title>Your Portfolio - School projects</title>
</head>
<body>
    <header>
        <h1>School Projects</h1> <img src="images/DC.jpg" alt="images/DC" width="100" height="75">  <h2>Drenthe College</h2>
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
    <h2>Choose a language:</h2>
    <button onclick="navigateToAnotherPage()">HTML/CSS</button>
    <button onclick="navigateToAnotherPage2()">PHP</button>
    <button onclick="navigateToAnotherPage3()">JAVA</button>
    <button onclick="navigateToAnotherPage4()">Javascript</button>
    </section>
    
   

<script>
    function navigateToAnotherPage() {
        window.location.href = 'html.php';
    }

    function navigateToAnotherPage2() {
        window.location.href = 'php.php';
    }

    function navigateToAnotherPage3() {
        window.location.href = 'java.php';
    }

    function navigateToAnotherPage4() {
        window.location.href = 'javascript.php';
    }
</script>
</div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Cyrus . All rights reserved.</p>
    </footer>
</body>
</html>
