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
      
      <style>
      body{
        overflow-x: hidden;
      }
      </style>
      
   </head>
   <body>
   @include('sweet::alert')
   @if($message = Session::get('error'))
					<div class="alert alert-danger alert-block">
							<button type="button" class="close" data-dismiss="alert">
							<i class="fa fa-times-circle" aria-hidden="true"></i>
							</button>
							<strong>{{$message}}</strong>
					</div>
					@endif

<!-- Login Web Header -->
<div class="loginwebheader">
   <div class="row login-header">

   <div class="col-10 login-header-left">
   

</div>
   <div class="co-2 login-header-right">
   <a href="{{url('/')}}">
   <img src="../../image/logo.png" alt="" width="100%" height="60px" >
   </a>
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
<a href="{{url('/')}}">
<img src="../../image/logo.png" alt="" width="100%" height="60px" >
</a>
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
<a href="{{url('/')}}">
<img src="../../image/logo.png" alt="" width="100%" height="60px" >
</a>
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
            <div class="sign-text" >Sign in to Dothalu Or <a href = "#" class = "sign-text-c" >Create An Account</a></div>
            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login"> SIGN IN</label>
               <label for="signup" class="slide signup">REGISTER</label>
               <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
               <form action="/weblogin" method="POST" class="login">
                  @csrf
                  <div class="field">
                     <input type="email" name="name" placeholder="Email Address" required>
                  </div>
                  <div class="field">
                     <input type="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="pass-link">
                     <a href="{{url('/forgotpass')}}">Forgot password? </a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer">
                     <input type="submit" value="Continue"></div>
                  </div>
                  <div class="signup-link">
                     <div class="separator">OR</div>
                  </div>
                  <div class="google-p" >           
                  <button class="google-one"> <a href="{{url('/auth/redirect')}}"><i class="fab fa-google "></i> &nbsp; Continue with Google </a></button>   
                  </div>
                  <div class="google-p" >
                     <button class="google-one" ><a href="{{url('/auth/facebook/redirect')}}"> <i class="fab fa-facebook "></i> &nbsp; Continue with Facebook </a></button>
                  </div>
               </form>
               <form action="/saveWebuser" method="POST" class="signup">
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
                     <div class="btn-layer">
                     <input type="submit" value="Signup"></div>
                  </div>
                  <div class="signup-link">
                     <div class="separator">OR </div>
                  </div>
                  <div class="google-p" >
                     <button class="google-one" ><a href="{{url('/auth/redirect')}}"> <i class="fab fa-google "></i> &nbsp; Continue with Google </a></button>
                  </div>
                  <div class="google-p" >
                     <button class="google-one" ><a href="{{url('/auth/facebook/redirect')}}"> <i class="fab fa-facebook "></i> &nbsp; Continue with Facebook </a> </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
        
      </div>
      
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
         
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