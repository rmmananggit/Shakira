<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/login.css">

      <title>Ucheque</title>
   </head>
   <body>
      <div class="login">

         <img src="images/login-bg.jpg" alt="login image" class="login__img">

      
         <form class="login__form">
            <div class="logo--cont">
                <img src="images/logo-dark.png" alt=""/>
            </div>
            
            <h1 class="login__title">Login as</h1>
            <br>
            <button type="submit" formaction="/hr/h_dash.html" class="login__button1">HR</button>
            <button type="submit" formaction="/staff/s_dash.html" class="login__button1">Staff</button>
            <button type="submit" formaction="/faculty/f_dash.html" class="login__button1">Faculty</button>
            <button type="submit" formaction="/admin/index.html" class="login__button1">Admin</button>
            <!-- 
            <p class="login__register">
                Don't have an account? <a href="#">Register</a>
            </p>
            -->
        </form>
        
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/main.js"></script>
   </body>
</html>