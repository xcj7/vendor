@extends('layouts.app')
@section('content')



        <table class="table table-bordered">
            <tr>
                <td></td>
                <td>u_id</td>
                <td>o_id</td>
                <td>Total order Price</td>
                <td>Status</td>
            </tr>
            @php
            $total = 0;
            $Price = 0;
            @endphp
            @foreach ($Oders as $item)
                <tr>
                    <td><img src="{{asset('Vendor/Create_Card_images/'.$item->image)}}" width="50px" height="50px"></td>
                    <td>{{$item->u_id}}</td>
                    <td>{{$item->o_id}}</td>
                    <td>{{$item->Price}}</td>
                    <td>{{$item->status}}</td>


                </tr>
            @endforeach
            
        </table>
        <form action="{{route('MyOrderHistory')}}" method="post">
            {{@csrf_field()}}
          
     

        <div class="input-group ps-5">
          <div id="navbar-search-autocomplete" class="form-outline">
            <input type="search" id="form1" class="form-control" />
            <label class="form-label" for="form1">Search</label>
          </div>
          <button type="button" class="btn btn-primary">
            <i class="fas fa-search"></i>
          </button>
        </div>
        </form>


    
@endsection