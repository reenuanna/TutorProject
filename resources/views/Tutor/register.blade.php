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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
>





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
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <textarea name="address" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>State</label>
                                    	<input type="text" name="state" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control" value="" />
                                    </div>
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <div class="maxl">
                                            <label class="radio inline"> <input type="radio" name="gender" value="male" checked><span> Male</span></label>
                                            <label class="radio inline"><input type="radio" name="gender" value="female"><span>Female </span></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" name="quali" class="form-control"  placeholder="Qualification *" value="" />
                                    </div>
                            </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">

                                            <!-- <input type="text" name="sub" class="form-control"  placeholder="Subject *" value="" /> -->
                                            <div class="form-group">
                                            <label>Classes</label>
                                            <!-- <input type="text" name="sub" class="form-control"  placeholder="Subject *" value="" /> -->
                                           
                                               <select name="cls" id="cls" class="form-control selectpicker" data-live-search="true" multiple>
                                                < @foreach($cls as $val)
                                                <option value="{{$val->cls_id}}">{{$val->class}}</option>
                                            @endforeach
                                            </select>
                                           <input type="text" name="classs" id="classs" />
                                            <script>
                                            // Material Select Initialization
                                            
                                                $(document).ready(function() {
                                           
 $('#cls').change(function(){
  $('#classs').val($('#cls').val());
 });
                                                });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label>Subjects</label>
                                               <select name="sub" id="sub" class="form-control selectpicker" data-live-search="true" multiple>
                                                      < @foreach($sub as $val1)
                                                <option value="{{$val1->sub_id}}">{{$val1->sub_name}}</option>
                                            @endforeach
                                          
                                            </select>
     <input type="text" name="subject" id="subject" />
                                            <script>
                                            // Material Select Initialization
                                                $(document).ready(function() {
                                           
 $('#sub').change(function(){
  $('#subject').val($('#sub').val());
 });
                                                });
                                            </script>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" minlength="10" maxlength="10" name="mobile" class="form-control" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"  value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="pass" class="form-control" value="" />
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control"  value="" />
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


