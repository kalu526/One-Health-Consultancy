<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>

    <style type="text/css">
      label{
        display:inline-block;
        width:200px;
      }
    </style>
    <!-- plugins:css -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
     <div class="container-fluid page-body-wrapper">

      <div class="container" align="center" style="padding-top:100px">
      @if(session()->has('message'))
      <div class="alert alert-success">
      
      {{session()->get('message')}}
      <button type="button" class="close" data-dismiss="alert">X</button>
      </div>
      
      @endif  

      <h2 style="font-size:27px;margin-bottom:10px;"><span style="color:#00cc7a">Write About</span>Company</h2> 
      <form action="{{url('upload_about')}}" method="POST" >
     @csrf

        <div style="padding:15px">
          <label for="title">Title</label>
          <input type="text" name="title" placeholder="Type Title" style="color:black" required>
        </div>

        <div style="padding:15px">
          <label for="desc">Description</label>
          <textarea type="number" name="desc" placeholder="Type Description" style="color:black" required></textarea>
    </div>

        <div style="padding:15px">
          
          <input type="submit" class="btn btn-success" placeholder="Submit">
        </div>

      </form>

      </div>
    </div>
        </div>
        
      </div>
     
    </div>
   
   @include('admin.script')
  </body>
</html>