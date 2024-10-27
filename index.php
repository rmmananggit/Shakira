<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/login.css">

      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

      <title>Ucheque</title>
   </head>
   <?php session_start(); ?>
   <body>
      <div class="login">

         <img src="images/login-bg.jpg" alt="login image" class="login__img">

      
         <form action="./process/login.php" class="login__form" method="POST" autocomplete="off">
            <div class="logo--cont">
               <img src="images/logo-dark.png" alt=""/>
            </div>
            
            <h1 class="login__title">Log In</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="email" required class="login__input" id="login-email" name="emailAddress" placeholder=" ">
                     <label for="login-email" class="login__label">Email</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" required class="login__input" id="login-pass" name="password" placeholder=" ">
                     <label for="login-pass" class="login__label">Password</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <div class="login__check">
               <div class="login__check-group">
                  <input type="checkbox" class="login__check-input" id="login-check">
                  <label for="login-check" class="login__check-label">Remember me</label>
               </div>

               <a href="#" class="login__forgot">Forgot Password?</a>
            </div>

            <button type="submit" class="login__button" name="login">Login</button>

            <!-- <p class="login__register">
               Don't have an account? <a href="#">Register</a>
            </p> -->
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <?php
    if(isset($_SESSION['status']) && $_SESSION['status_code'] !='') {
        ?>
        <script>
          const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.onmouseenter = Swal.stopTimer;
              toast.onmouseleave = Swal.resumeTimer;
            }
          });
          Toast.fire({
            icon: "<?php echo $_SESSION['status_code']; ?>",
            title: "<?php echo $_SESSION['status']; ?>"
          });
        </script>
        <?php
        unset($_SESSION['status']);
        unset($_SESSION['status_code']);
    }     
  ?>
         <script src="assets/main.js"></script>
         <!-- Vendor JS Files -->
         <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
         <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
         <script src="assets/vendor/chart.js/chart.umd.js"></script>
         <script src="assets/vendor/echarts/echarts.min.js"></script>
         <script src="assets/vendor/quill/quill.js"></script>
         <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
         <script src="assets/vendor/tinymce/tinymce.min.js"></script>
         <script src="assets/vendor/php-email-form/validate.js"></script>
   </body>
</html>