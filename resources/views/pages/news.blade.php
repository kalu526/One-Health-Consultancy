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

  <!-- Back to top button -->
  <div class="back-to-top"></div>

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
            <li class="nav-item">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item active">
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
  
  <div class="page-banner overlay-dark bg-image" style="background-image: url(../asset/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
 
  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
          @foreach($blog as $blogs)
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">{{$blogs->catagory}}</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="doctorimage/{{$blogs->image}}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{url('singlepage',$blogs->id)}}">{{$blogs->title}}</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                     
                      <span>Posted By Admin</span>
                    </div>
                    <span class="mai-time"></span> {{$blogs->created_at}}
                  </div>
                </div>
              </div>
            </div>
            @endforeach

           
            
            
           
            
            

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
            <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                @foreach($blog as $blogs)
                <li><a href="#">{{$blogs->catagory}}<span>12</span></a></li>
                @endforeach
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              @foreach($blog as $blogs)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="doctorimage/{{$blogs->image}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">{{$blogs->title}}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span>{{$blogs->created_at}}</a>
                    <a href="#"><span class="mai-person"></span>Posted By Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
             @endforeach
             
            </div>

        

           
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section banner-home bg-image" style="background-image: url(../asset/img/banner-pattern.svg);">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
          <div class="img-banner d-none d-lg-block">
            <img src="../asset/img/mobile_app.png" alt="">
          </div>
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
          <a href="#"><img src="../asset/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="../asset/img/app_store.svg" alt=""></a>
        </div>
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .banner-home -->

  @include('user.footer')

<script src="../asset/js/jquery-3.5.1.min.js"></script>

<script src="../asset/js/bootstrap.bundle.min.js"></script>

<script src="../asset/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../asset/vendor/wow/wow.min.js"></script>

<script src="../asset/js/theme.js"></script>
  
</body>
</html>