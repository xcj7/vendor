

<div  class="position-fixed" style ="height:0px;" >



<div class="col-md-2 bg-light side-nav sticky-left p-3">
    <a href=""><img class="rounded-circle" style="width:100px; height:100px;" src="67386077.jpg" alt=""></a>
    
    <h5 class="nav-icon" ><a class="nav-link fa-solid fa-users" href="{{route('CreateCard')}}">Create</a></h5>

    <h5 class="nav-icon" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-truck"></i> Delivery</h5>
    <div class="collapse" id="collapseExample">
   <div class="">
  <h5 class="nav-sub-icon" ><a class="nav-link fa-solid fa-person-circle-plus" href="{{route('StockedProducts')}}">stock</a></h5>
  <h5 class="nav-sub-icon"><i class="fa-solid fa-clock-rotate-left"></i>  History</h5>
  <h5 class="nav-sub-icon"><i class="fa-solid fa-user-check"></i>  Request</h5>
  </div>
  
</div>
<h5 class="nav-icon" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-cash-register"></i> Orders</h5> 
<div class="collapse" id="collapseExample2">
  <div class="">
 
  <h5 class="nav-icon" ><a class="fa-solid fa-clipboard-list" href="{{route('mycart')}}">Cart</a></h5>
  <h5 class="nav-sub-icon"><i class="fa-solid fa-clipboard-list"></i> Order List</h5>
  <h5 class="nav-sub-icon"><i class="fa-solid fa-clock-rotate-left"></i>  History</h5>
  </div>
</div>
<h5 class="nav-icon"><i class="fa-solid fa-envelope-open-text"></i>  Support</h5>
<h5 class="nav-icon" ><a class="nav-link fa-solid fa-right-from-bracket" href="{{route('logout')}}">Logout</a></h5>








</div>