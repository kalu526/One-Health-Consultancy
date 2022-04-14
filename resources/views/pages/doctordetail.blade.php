<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../asset/css/maicons.css">

  <link rel="stylesheet" href="../asset/css/bootstrap.css">

  <link rel="stylesheet" href="../asset/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../asset/vendor/animate/animate.css">

  <link rel="stylesheet" href="../asset/css/theme.css">
</head>
<body>

 

<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('contact')}}">Contact</a>
            </li>

             @if(Route::has('login'))
             @auth
             <li class="nav-item">
              <a class="nav-link" href="{{url('myappointement')}}" style="background-color:greenyellow;color:white">My Appointement</a>
            </li>
             <x-app-layout>
 
             </x-app-layout>

             @else
            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
          @endauth
          @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../asset/img/bg_image_1.jpg);">
  <div class="hero-section">
    <div class="container text-center wow zoomIn">
      <span class="subhead">Let's make your life happier</span>
      <h1 class="display-4">Healthy Living</h1>
      <a href="#" class="btn btn-primary">Let's Consult</a>
    </div>
  </div>
</div>


<div class="bg-light">
  <div class="page-section py-3 mt-md-n5 custom-index">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-secondary text-white">
              <span class="mai-chatbubbles-outline"></span>
            </div>
            <p><span>Chat</span> with a doctors</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-primary text-white">
              <span class="mai-shield-checkmark"></span>
            </div>
            <p><span>One</span>-Health Protection</p>
          </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <div class="card-service wow fadeInUp">
            <div class="circle-shape bg-accent text-white">
              <span class="mai-basket"></span>
            </div>
            <p><span>One</span>-Health Pharmacy</p>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .page-section -->

 <div style="margin-top:50px;margin-bottom:70px;height:100vh;">

   <div style="background-color:#0080ff;height:300px;display:flex;flex-direction:row;">
     <div style="margin:20px">
        <img width="200px " height="200px" src="doctorimage/{{$data->image}}" alt="">
      
     </div>

     <div style="display:flex;flex-direction:column;margin:20px">
       <span style="color:white;font-size:25px;margin-bottom:20px;">Doctor Name:-{{$data->doctorname}}</span>
       <span style="color:white;font-size:25px;margin-bottom:20px;">Phone NUmber:-{{$data->phonenumber}}</span>
       <span style="color:white;font-size:25px;margin-bottom:20px;">Room Number:-{{$data->roomnumber}}</span>
       <span style="color:white;font-size:25px;margin-bottom:20px;">Speciality:-{{$data->speciality}}</span>
     </div>

   </div>
<div align="center" style="margin-top:50px;background-color:lightgray;height:100vh;">
  <h2 style="font-size:30px;font-weight:500;color:white;background-color:blueviolet;margin-bottom:40px;">Doctor's Profile And Work Experience Description</h2>
  <span style="font-size:20px;color:black;text-align: left; display:flex; flex-direction: column; align-items: center;margin:20px">{{$data->desc}}</span>
</div>

 </div>


@include('user.footer')
  

  

<script src="../asset/js/jquery-3.5.1.min.js"></script>

<script src="../asset/js/bootstrap.bundle.min.js"></script>

<script src="../asset/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../asset/vendor/wow/wow.min.js"></script>

<script src="../asset/js/theme.js"></script>
  
</body>
</html>