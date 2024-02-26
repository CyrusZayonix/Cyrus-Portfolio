<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"> 
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function toggleText() {
            var initialText = document.getElementById('headerText');
            var hiddenText = document.getElementById('hiddenText');

            if (initialText.style.display === 'none') {
                initialText.style.display = 'block';
                hiddenText.style.display = 'none';
            } else {
                initialText.style.display = 'none';
                hiddenText.style.display = 'block';
            }
        }

        function buttonClicked() {
            try {
                window.location.href = 'Diet.php';
            } catch (error) {
                console.error('Error:', error);
            }
        }

        function buttonClicked1() {
            try {
                window.location.href = '11.php';
            } catch (error) {
                console.error('Error:', error);
            }
        }

        function buttonClicked2() {
            try {
                window.location.href = 'OC.php';
            } catch (error) {
                console.error('Error:', error);
            }
        }

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

            setInterval(toggleText, 2000);
        });

    </script>    
    <title>shapedbymoradi</title>
</head>
<header>
    <h1>Home</h1> 
    <img src="images/main.png" alt="main">
    <div id="headerText">Your Dream Physique?</div>
    <div id="hiddenText">We Got You!</div>
</header>
<body>
    <nav>
        <ul>
            <li><a id="home" href="index.php">Home</a></li>
            <li><a id="diet" href="Diet.php">Diet Program</a></li>
            <li><a id="WO" href="WO.php">Workout Program</a></li>
            <li><a id="11" href="11.php">1 on 1 coaching</a></li>
            <li><a id="OC" href="OC.php">Online coaching</a></li>
        </ul>
    </nav>

    <section>
        <button id=Diet onclick="buttonClicked()"><img id="Dietimg" src="images/diet.png" alt="diet"> <h2> Looking for a Diet? Click here! </h2> </button>
        <button id=PC onclick="buttonClicked1()"> <img id="PCimg" src="images/PC.jpg" alt="PC"> <h2> Looking for 1 on 1 coaching? Click here! </h2> </button>
        <button id=WP onclick="buttonClicked2()"> <img id="WPimg" src="images/WP.jpg" alt="WP"> <h2>Looking for a workout program? Click here!</h2> </button>
    </section>
    <section>
    <div id=indextxt>
    <h1>Why choose shapedbymoradi?</h1>
    <br>
    <h3>Personalized Guidance</h3>
        <p>Welcome to ShapedByMoradi, where your health and fitness journey becomes a personalized adventure! Our 1 on 1 online coaching services are crafted to provide tailored guidance, addressing your unique goals and challenges. Whether you're aiming for weight loss, muscle gain, or simply striving for a healthier lifestyle, our experienced coaches are dedicated to understanding your needs and helping you achieve sustainable results. </p>
            <br>
    <h3>Expert Coaching for Every Level</h3>
        <p>At ShapedByMoradi, we believe that fitness is for everyone, regardless of your current fitness level. Our team of expert coaches is here to support you, whether you're a seasoned athlete or just starting your fitness journey. We take pride in offering comprehensive and adaptable coaching strategies that meet you where you are and propel you towards your desired level of health and fitness.</p>
            <br>
    <h3>Holistic Wellness Approach</h3>
        <p>Achieving your fitness goals goes beyond just physical exercise. Our holistic approach to 1 on 1 online coaching encompasses not only effective workout routines but also personalized nutrition plans, lifestyle adjustments, and mental well-being strategies. We are committed to helping you develop a sustainable and balanced lifestyle that extends beyond the gym, promoting overall wellness and long-term success.</p>
            <br>
    <h3>Community and Support</h3>
        <p>Join a community of like-minded individuals on a shared mission to prioritize health and fitness. Our 1 on 1 online coaching program fosters a supportive environment where you can connect with others on similar journeys. Share your successes, seek advice, and celebrate milestones together. With ShapedByMoradi, you're not just getting a coach; you're gaining a supportive community dedicated to helping you flourish in your pursuit of a healthier and happier life.</p>
    </div>
    </section>

    <footer>
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
        <img src="images/main.png" alt="main">
    </footer>
</body>
</html>
