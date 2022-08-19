<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Dothalu.lk - Forgot password</title>
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

@include('sweet::alert')

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
                    <div class="sign-text" >Forgot password</div>
                    
                    <div class="form-inner">
                    <form action="/send-mail" method="POST" class="login">
                        @csrf
                        <div class="field">
                            <input type="email" name="email" placeholder="Enter Email Address">
                        </div>
                        <div class="field btn">
                        <div class="btn-layer">
                            <input type="submit" value="Send">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>   
      </div>
   </body>
</html>