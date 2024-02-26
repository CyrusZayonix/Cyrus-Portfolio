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
         <h1>Workout Program</h1> 
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
        <section>
        <h2>fdcishid</h2>
        <p>fdsjh oufdsihu isdu fdsyfsd ifigdsfhgdsgu9fisdisgdis ghsd duf isdgi gf </p>
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