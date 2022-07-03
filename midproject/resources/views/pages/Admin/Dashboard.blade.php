@extends('layouts.app')
@section('content')
<style>
    .side-nav{
        border: 1px solid black;
      
    }
    .nav-icon{
        color: gray;
        margin: 20px 0;
        cursor: pointer;
    }
    .nav-sub-icon{
        font-size:16px;
        margin-left: 20px;
        color: gray;
        cursor: pointer;
    }
</style>
<br>
<div class="row">
    @include('inc.sidenav')
</div>
    
     <div class="col-md-10">
        <h2>Admin Dashboard</h2>
        <span>Welcome <a href="">Imon Faysal</a> to our System</span>
        <br> <br>
    <div class="row d-flex justify-content-center">
    <div class="col-md-4 m-1 card">
            <div class="title">
                <h3 class="text-center text-info">USERS</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-secondary"> Buyer: 1200</h2>
               <h5 class="text-success"> Seller: 400</h2>
               <h5> Delivery Man: 100</h2>
            </div>
        </div>
        <div class="col-md-3 m-1  card">
        <div class="title">
                <h3 class="text-center text-secondary">BUYER</h3>
            </div>
            <div class="body text-center text-success">
               <h5 class="text-success"> Today: 100</h2>
               <h5 class="text-info"> This Week: 400</h2>
               <h5 class="text-primary"> This year: 1000</h2>
            </div>
        </div>
        <div class="col-md-4 m-1  card">
        <div class="title">
                <h3 class="text-center text-success">SELLER</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-success"> Today: 100</h2>
               <h5 class="text-info"> This Week: 400</h2>
               <h5 class="text-primary"> This year: 1000</h2>
            </div>
        </div>
        <div class="col-md-4 m-1  card">
        <div class="title">
                <h3 class="text-center">DELIVERY MAN</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-success"> Today: 100</h2>
               <h5 class="text-info"> This Week: 400</h2>
               <h5 class="text-primary"> This year: 1000</h2>
            </div>
        </div>
        <div class="col-md-3 m-1  card">
        <div class="title">
                <h3 class="text-center text-info">PRODUCTS</h3>
            </div>
            <div class="body text-center">
               <h5 class="text-seconday"> Total: 1000</h2>
               <h5 class="text-success"> Total Sell: 400</h2>
             
            </div>
        </div>
        <div class="col-md-4 m-1  card">
        <div class="title">
                <h3 class="text-center  text-primary">ORDERS</h3>
            </div>
            <div class="body text-center">
               <h5> Pending: 1000</h2>
               <h5 class="text-success">Successful: 400</h2>
               <h5  class="text-danger">Failed: 400</h2>
             
            </div>
    </div>
     </div>
   
</div>
@endsection