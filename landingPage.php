<!DOCTYPE html>
<html>
  <body>
  <link rel="stylesheet" href="3d/css/style.css" type="text/css" />

  <canvas id="bg" class="bg"></canvas>
      <main>
        <header>
          <h1>MAKERSPACE</h1>
          <p>🚀 Welcome Designers and Intiators to our website!</p>
        </header>

    
        <section class="light">
          <h2>👩🏽‍🚀 Book your Slot Today!</h2>
          <p>
              Our Calendar is open for all to book.<br>
              Simply make an account, and choose a slot for yourself.<br>
              <em>  Note: Currrently no time adjustment will update. </em>
            <form action="/calendar" method = "get">
            <button>Click Here to View Avilabilities</button>
          </form>  
          </p>

          <h2>🏆 Create an Account</h2>
          <p>
              Begin your journey with us by creating or logging into account with: <br>
              Email or Google Account
          </p>
          <form action="/account" method = "get">
            <button>Login/ Create Account!</button>
          </form>  <br>

        <h2>👩🏽‍🚀 Why Want to Start Printing!</h2>
          <p>
            <form action="/octoPrint/file" method = "get">
            <button>Click Here to Start Printing</button>
          </form>  
          </p>
        </section>
        
  <section>
          <h2>📜 ABOUT </h2>
          <p>
              Now, this website aims to tackle the booking convienience issue and printing on site issue.<br>
              Our Aim is to allow students to book reservation just for them.<br>
              During which they can upload their .gcode files remotely!<br>
          </p>
          <p>Triva for the day:</p>
          <blockquote>{{fortune}}</blockquote>
        </section>
        
      <script type="module" src="3d/main.js" crossorigin="anonymous"></script>
</html>