<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Dothalu.lk - Login</title>
      <!-- ::::::::::::::Favicon icon::::::::::::::-->
      <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
      <!-- Main CSS -->
      <link rel="stylesheet" href="../../../assetss/css/login.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>


<!-- Login Web Header -->
<div class="loginwebheader">
   <div class="row login-header">

   <div class="col-10 login-header-left">
   

</div>
   <div class="co-2 login-header-right">

   <img src="../../image/logo.png" alt="" width="100%" height="60px" >
   </div>
   </div>
</div>
   <!-- Login Web Header -->
   <!-- Login Mobile Header -->
   <div class="loginmobileheader">

   
   <div class="row login-header">

<div class="col-6 login-header-left">


</div>
<div class="col-6 login-header-right">

<img src="../../image/logo.png" alt="" width="100%" height="60px" >
</div>
</div>
</div>
   <!-- Login Mobile Header -->


     <!-- Login tab Header -->
     <div class="logintabheader">

   
<div class="row login-header">

<div class="col-8 login-header-left">


</div>
<div class="col-4 login-header-right">

<img src="../../image/logo.png" alt="" width="100%" height="60px" >
</div>
</div>
</div>
<!-- Login tab Header -->


      <div class="row">
         
         <div class="col d-flex justify-content-center">
            <div class="wrapper  ">
         <div class="title-text">
            <div class="title login">
               Hello
            </div>
            <div class="title signup">
               Hello 
            </div>
         </div>
         <div class="form-container">
            
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login"> Reset Password</label>
               
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="/resetuser" method="POST" class="signup">
                  @csrf
                  <div class="field">
                     <input type="email" name="email" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" id="rpassword" placeholder="Password" required>
                  </div>
                  <div class="field">
                     <input type="password" name="confirm_password"  id="confirm_password" placeholder="Re-enter Password" required>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"><input type="submit" value="Reset"></div>
                     
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
        
      </div>
      
      <script>        
         var password = document.getElementById("rpassword")
         , confirm_password = document.getElementById("confirm_password");
         
         function validatePassword(){
         if(password.value != confirm_password.value) {
         confirm_password.setCustomValidity("Passwords Don't Match");
         } else {
         confirm_password.setCustomValidity('');
         }
         }
         
         password.onchange = validatePassword;
         confirm_password.onkeyup = validatePassword;
      </script>
   </body>
</html>