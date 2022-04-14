<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">

      @foreach($blog as $blogs)
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$blogs->catagory}}</a>
              </div>
              <a href="blog-details.html" class="post-thumb">
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
       

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{url('news')}}" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div>