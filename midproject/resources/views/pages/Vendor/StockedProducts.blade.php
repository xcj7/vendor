
@extends('layouts.app')
@section('content')



<div class="row">
<div class="col-md-12">
</div>
</div>




<style>
.zoom {
  padding: 50px;
 
  transition: transform .2s; /* Animation */
  width: 400px;
  height: 400px;
  margin: 0 auto;
 
}

.zoom:hover {
  transform: scale(1.051); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
 
   }

   

</style>



<div class="row">
    @include('inc.sidenav')
</div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////-->


<div class="col-md-3">
        @foreach ($products as $item)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('Vendor/Create_Card_images/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text text-center">{{$item->Product_name}}<br>
                <span>Price: BDT{{$item->Price}}</span><br>
                <a href="{{route('addtocart',['id'=>$item->id])}}" class="btn btn-primary" style="color:white">Add to Cart</a></p>
                </div>
            </div>
        @endforeach
    </div> 


<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->








<div class="col-md-10">


<div class="zoom mb-4 ">


<div class="container mt-3">

  <div class="card ">
    
    <img  class="card-img-top img-fluid fade-in"  style ="height:200px;"   src="/Vendor/StockedProducts/salmon_1.jpg" alt="description of myimage">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
 

  </div>

  </div>
 


<div class="zoom" >



<div class="container-fluid mt-3 ">

<div class="card "  >
  
  <img class="card-img-top img-fluid fade-in"  style ="height:200px;" src="/Vendor/StockedProducts/kacchi_1.png" alt="description of myimage">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

</div>





</div>




</div>



<div class="row">
<nav aria-label="..." >
  <ul class="pagination justify-content-center ">
    <li class="page-item disabled ">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

</div>



</div>


<!-- /////////////////////////////////////////////////////////////////////////// -->


@endsection

