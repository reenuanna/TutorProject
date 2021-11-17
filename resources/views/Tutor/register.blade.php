<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="/css/register.css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
  <title>Document</title>
</head>
<body>
	<div class="container register">
    	<div class="row">
            <div class="col-md-3 register-left">
                <img src="/images/logo.jpg" alt=""/>
                <h3>Welcome</h3>
                <p>to Reach the Unreachable</p>
                <a href="/tutorlog" class="btn btn-light btn-block">Login</a><br/>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Fill your Details</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form method="post" action="/saveTutor">@csrf
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <textarea name="address" class="form-control" placeholder="Address *" ></textarea>
                                    </div>
                                    <div class="form-group">
                                    	<input type="text" name="state" class="form-control"  placeholder="State *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="city" class="form-control" placeholder="City *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <div class="maxl">
                                            <label class="radio inline"> <input type="radio" name="gender" value="male" checked><span> Male</span></label>
                                            <label class="radio inline"><input type="radio" name="gender" value="female"><span>Female </span></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="quali" class="form-control"  placeholder="Qualification *" value="" />
                                    </div>
                            </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                            <input type="text" name="sub" class="form-control"  placeholder="Subject *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="10" name="mobile" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="confirm Password *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div>
<!--  -->
                        </div>
                    </div>
                </div>

            </div>
</body>
</html>


