<html>
    <head>
        <title>Yusuf's first PHP Website</title>
    </head>
    <body>
        <h2>Login Page</h2>
        <a href="/MakerSpace/index.php">Click here to go back</a><br/><br/>
        
        <form action="check_login.php" method="POST">
           Enter Email: <input type="text" 
           name="email" required="required" /> <br/>
           Enter password: <input type="password" 
           name="password" required="required" /> <br/>
           <input type="submit" value="Login"/>
        </form>
    </body>
</html>