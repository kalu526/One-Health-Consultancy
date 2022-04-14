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

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$blog->title}}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="doctorimage/{{$blog->image}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">Posted By Admin</span>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{$blog->created_at}}</a>
              </div>
              <span class="divider">|</span>
              <div>
              {{$blog->catagory}}
              </div>
             
             
            </div>
        <h2 class="post-title h1">{{$blog->title}}</h2>
            <div class="post-content">
           <p>{{$blog->desc}}</p>
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">{{$blog->catagory}}</a>
             
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">{{$total}} Comments</a>
             
            </div>
          </article> <!-- .blog-details -->

          <div class="comment-form-wrap pt-5">
          @if(session()->has('message'))

<div class="alert alert-success">
{{session()->get('message')}}
<button class="close" data-dismiss="alert" >X</button>
</div>
@endif
            <h3 class="mb-5">Leave a comment</h3>
            <form action="{{url('comment')}}" method="POST" class="">
              @csrf
              <div class="form-row form-group">
                
                <div class="col-md-6">
                  <label for="email">Name</label>
                  <input type="text" class="form-control"  name="name">
                </div>
              </div>
              
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
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
                
                <li><a href="#">{{$blog->catagory}} <span>{{$blog->count()}}</span></a></li>
               
              </ul>
             
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              @foreach($blogs as $blogss)
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="doctorimage/{{$blogss->image}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{url('singlepage',$blogss->id)}}">{{$blogss->title}}</a></h5>
                  <div class="meta">
                    <a href=""><span class="mai-calendar">{{$blogss->created_at}}</span> </a>
                    <a href=""><span class="mai-person"></span> Posted By Admin</a>
                    <a href=""><span class="mai-chatbubbles"></span> {{$blogss->id}}</a>
                  </div>
                </div>
              </div>
              @endforeach

             
             
            </div>
             
            <div class="sidebar-block">
              
              <h3 class="sidebar-title">Comments</h3>
              @foreach($com as $coms)
              <div>
              <div style="display:flex;flex-direction:row;justify-content:space-between;align-items:center;margin-bottom:10px;">
              <span style="font-size:13px;color:lightgray">{{$coms->name}}</span>
              <span style="font-size:13px;color:lightgray">{{$coms->created_at}}</span>
                </div>
               
                <p>{{$coms->message}}</p>
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