<html>
    <head>
        <title>My Database Website</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css"> 
    </head>
    <body>
        <h1>My Database Website</h1>
        <hr>
        <p>This is just a test page testing if php & sql works. If it doesn't it should display some error message.</p>
        <br>
        <br>
        <?php 
            echo'<h2>PHP WORKS!</h2>';
            echo'<p>Ready to start coding?</p>'
        ?>
        <br>
        <?php 
            include 'includes/dbh.inc.php';
            echo'<h2>MySQLi WORKS!</h2>';
            echo'<p>Let"s get that data!</p>';
        ?>
    </body>
</html>