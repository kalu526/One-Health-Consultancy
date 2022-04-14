<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
   <base href="/public">
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
      <form action="{{url('sendemail',$data->id)}}" method="POST">
     @csrf

        <div style="padding:15px">
          <label for="greetings">Greetings</label>
          <input type="text" name="greetings" placeholder="Type Greetings" style="color:black" required>
        </div>

        <div style="padding:15px">
          <label for="body">Body</label>
          <input type="text" name="body" placeholder="Type Body" style="color:black" required>
        </div>


        <div style="padding:15px">
          <label for="actiontext">Action Text</label>
          <input type="text" name="actiontext" placeholder="Type Action Text" style="color:black" required>
        </div>

        <div style="padding:15px">
          <label for="actionurl">Action Url</label>
          <input type="text" name="actionurl" placeholder="Type Action Url" style="color:black" required>
        </div>

        <div style="padding:15px">
          <label for="endpart">End Part</label>
          <input type="text" name="endpart" placeholder="Type End Part" style="color:black" required>
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