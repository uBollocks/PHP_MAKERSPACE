<html>
    <head>
        <title>Yusuf Website</title>
    </head>
    <body>
        <?php
        echo 'PHP version: ' . phpversion();
        
    $ext = new ReflectionExtension('mysqli');
    var_dump($ext->getVersion());
            echo "<p>Hello World!</p>";
        ?>
        <a href="/MakerSpace/authentication/login.php"> Click here to login 
        <a href="/MakerSpace/authentication/register.php"> Click here to register 
        <a href="/MakerSpace/calendar/month.php"> Click here to Calendar 
    </body>
</html> 