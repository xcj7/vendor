
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img class="rounded-circle" style="width:100px; height:100px;" src="logo.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end"  id="navbarText">
      <ul class="navbar-nav justify-content-sm-center mb-3 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('vendorDashboard')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Profile</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Registration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li>
      </ul>
       
    </div>
  </div>
</nav>