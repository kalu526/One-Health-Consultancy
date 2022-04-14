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

     <div align="center" style="padding-top:100px;">
      <table>

      <tr style="background-color:black">
          <th style="padding:25px">DoctorName</th>
          <th style="padding:25px">PhoneNumber</th>
          <th style="padding:25px">Speciality</th>
          <th style="padding:25px">RoomNumber</th>
          <th style="padding:25px">Image</th>
          <th style="padding:25px">UpdateInfo</th>
          <th style="padding:25px">DeleteInfo</th>
      </tr>
       @foreach($data as $appoint)
      <tr align="center" style="background-color:skyblue;">
        <td>{{$appoint->doctorname}}</td>
        <td>{{$appoint->phonenumber}}</td>
        <td>{{$appoint->speciality}}</td>
        <td>{{$appoint->roomnumber}}</td>
        <td><img width="60px" height="60px" src="doctorimage/{{$appoint->image}}" style="border-radius:7px"></td>
        <td>
            <a class="btn btn-primary" href="{{url('updatedoctor',$appoint->id)}}">Update</a>
        </td>
        <td>
            <a class="btn btn-danger" href="{{url('deletedoctor',$appoint->id)}}" onclick="return confirm('Are You Sure You Want To Delete This Doctor')">Delete</a>
        </td>
      </tr>
   @endforeach
      </table>
    </div>
     
    </div>
   
   @include('admin.script')
  </body>
</html>