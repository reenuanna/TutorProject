<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="/css/login.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="main">
    
    <div class="container">
      
<center>
<div class="middle">
      <div id="login">

        <form action="/logintut" method="post">
@csrf
          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text" name="email"  Placeholder="Email ID" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password" name="pass"  Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
             <div>
             <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#"  style="color:white">Forgot
               password?</a></span>
              <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" class="btn btn-primary" value="Sign In"></span>
              </div>
              <br>
              <div>
             <span style="width:48%; text-align:left;  display: inline-block;"><p  style="color:white">New Member ?</p></span>
              <span style="width:50%; text-align:right;  display: inline-block;"><a href="/tutorsignup" class="btn btn-dark" style="color:white">Sign Up</a></span>
              </div>
          </fieldset>
         
<div class="clearfix">
</div>
        </form>
       

      </div> <!-- end login -->
      <div class="logo">
        <img src="/images/logo.jpg" alt="">
        <br>to Reach the Unreachable
          
          <div class="clearfix"></div>
      </div>
      
      </div>
</center>
    </div>

</div>