<?php

namespace App\Http\Controllers;
use App\Models\CreateCard;
use App\Models\all_user;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCreateCardRequest;
use App\Http\Requests\UpdateCreateCardRequest;

class CreateCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function CreateCard()
    {
       // print_r("hellow ");

     return view('pages.vendor.CreateCard');

    }


    public function CreateCardSubmitted(StoreCreateCardRequest $request)
    {
        $request->validate([
            
            "Product_name"=>"required",
            'Small_description'=>'required',
            'Price'=>'required',
            'product_type'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      
        ]);
      
     //   $imageName = time().'.'.$request->image->extension();  
 $imageName = time()."_".$request->file('image')->getClientOriginalName();
        $request->image->move(public_path('Vendor\Create_Card_images'), $imageName);
        
        
$a="active";

$value = $request->session()->get('user');


        $st = new CreateCard();
        $st->vendor_id=$value;
        $st->Product_name = $request->Product_name;
        $st->Small_description = $request->Small_description;
        $st->Price = $request->Price;
        $st->product_type = $request->product_type;
        $st->image = $imageName;
        $st->status = $a;
        if($st)
        {

            $st->save();
        
        }
      
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
        
        
    }


    public function show()
    {
     
        $products = CreateCard::all();
        return view('pages.vendor.stockedproducts')->with('products',$products);
    
    }

   



    public function CancelFun()
    {
     
        return view('pages.vendor.vendorDashboard');
    }
}
 