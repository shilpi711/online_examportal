<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
      
      function success()
      {

         alert("sure to signup with this email and password");

      }

    </script>

</head>
<style type="text/css">
  @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}
</style>
<body>


<section class="login-block">
  
    @if(session('message'))

         <h3 class ="alert alert-danger">
          <center>{{session('message')}}</center>
         </h3>
          
    @endif
  
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center"> Student Signup </h2>
        <form class="login-form" action="{{url('studentsavesignup')}}" method="post">
          @csrf
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" >Name</label>
    <input type="text" class="form-control" placeholder="enter your name" name="name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" >Email</label>
    <input type="text" class="form-control" placeholder="enter your email" name="email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" >Mobile</label>
    <input type="text" class="form-control" placeholder="enter your mobile number" name="mobile">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" >Date of birth</label>
    <input type="date" class="form-control" placeholder="enter your date of birth" name="dob">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase" >Password</label>
    <input type="password" class="form-control" placeholder="enter your password" name="password">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail1" class="text-uppercase" >Exam title</label>
         <select class="form-control" name="exam" >
           <option >Select exam</option>
           @foreach($data as $datas)
            <option value="{{$datas-> id}}">{{$datas-> title}}</option>
          @endforeach
         </select>
        </div>
  
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <br>

    <button type="submit"  onclick="reg()" class="btn btn-login float-right">
      <a href="/">
   Login</a></button>
   <br>
   <br>
    
    <button type="submit" name="submit" onclick="success()" class="btn btn-login float-right">Submit</button>
  </div>
  
</form>

    </div>
    <div class="col-md-8 banner-sec">
           
      <img class="d-block img-fluid" src="https://www.ic.edu/sites/default/files/styles/highlights_large/public/2019-09/190826ic141.jpg?itok=m6LvfPlQ" alt="First slide">
      
        
    
    
            </div>     
        
    </div>
  </div>
</div>
</section>

</body>
</html>
