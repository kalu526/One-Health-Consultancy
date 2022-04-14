<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
        @if(session()->has('message'))

        <div class="alert alert-success">
        {{session()->get('message')}}
        <button class="close" data-dismiss="alert" >X</button>
        </div>
        @endif
      <form class="main-form" action="{{url('appointement')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name" name="name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address.." name="email">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control" name="date">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
            <option >-------Select Doctors-----</option>
              @foreach($doctor as $doctors)
              
              <option value={{$doctors->doctorname}}>{{$doctors->doctorname}}---Speciality---{{$doctors->speciality}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number.." name="phone">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.." ></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-success mt-3">Submit Request</button>
      </form>
    </div>
  </div>