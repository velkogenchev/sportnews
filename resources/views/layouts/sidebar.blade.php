<!-- Sidebar Widgets Column -->
<div class="col-md-4">

  <!-- Search Widget -->
  <div class="card my-4">
    <h5 class="card-header">Search</h5>
    <div class="card-body">
      {!! Form::open(['method'=>'GET','url'=>'posts','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
      <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search for...">
        <span class="input-group-btn">
          <button class="btn btn-default-sm" type="button">Go!</button>
        </span>
      </div>
      {!! Form::close() !!}
    </div>
  </div>

  <!-- Categories Widget -->
  <div class="card my-4">
    <h5 class="card-header">Categories</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            @foreach ($categories as $category)
            <li>
              <a href="/sportnews/public/categories/{{ $category }}">{{ $category }}</a>
            </li>
           @endforeach 
          </ul>
        </div>        
      </div>
    </div>
  </div>

  <div class="card my-4">
    <h5 class="card-header">Tags</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            @foreach ($tags as $tag)
              <li>
                <a href="/sportnews/public/tags/{{ $tag }}">{{ $tag }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Side Widget -->
  <div class="card my-4">
    <h5 class="card-header">Side Widget</h5>
    <div class="card-body">
      You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
    </div>
  </div>

</div>
