

@extends('layouts.app')
@section('content')
<style>
.input{
    height: 50px;
}
label{
    color: green;
}
</style>
<br><br>
<div class="row mx-5 justify-content-center">
<div class="col-md-6 col-sm-9">
    <div class="title">
    <h2 class="text-center">Card Informations</h2>
    </div>
<form action="{{route('CreateCard')}}" method="post" enctype="multipart/form-data" >
    @csrf

    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Product Name</label>
  <input type="text" class="form-control input" type="text" name="Product_name" id="Product_name" placeholder="name...">
</div>
@error('name')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Small description</label>
  <input type="text" class="form-control input" type="text" name="Small_description" id="Small_description" placeholder="Abcd...">
</div>
@error('Small_description')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Price</label>
  <input type="text" class="form-control input" type="text" name="Price" id="Price" placeholder="123...">
</div>
@error('Price')
<div class="alert alert-danger" role="alert">
  {{$message}}
</div>
@enderror




<select class="form-select" aria-label="Default select example" name="product_type" id="product_type"  >
  <option selected>Product Type</option>
  <option value="1">Foods</option>
  <option value="2">Furtitures</option>
  <option value="3">cosmethics</option>
  <option value="4">techs</option>
  <option value="5">others</option>
</select>





<div class=" form-group mb-3">
  
          <label for="exampleFormControlInput1">Please Select Image</label>
          <input type="file" id="image" name="image" class="@error('image') is-invalid @enderror form-control">
          @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        </div>
</div>


<div class="mb-3">
<br>
  <input type="submit" class="form-control btn btn-success" value="SUBMIT">
</div>
</form>
<p class="text-center"> <a href="{{route('vendorDashboard')}}">Cancel</a></p>
</div>
</div>
@endsection