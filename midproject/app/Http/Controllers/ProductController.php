<?php

namespace App\Http\Controllers;

use App\Models\CreateCard;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderdetail;

class ProductController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function list(){

        $products = Product::all();
        return view('pages.vendor.stockedproducts')->with('products',$products);

    }
    public function addtocart(Request $req){
        $id = $req->id;
        $p = createcard::where('id',$id)->first();
        // echo "<pre>";
        // print_r($p);
        // print_r($p->Price);
        // echo "</pre>";
        $cart=[];
        //$jsonCart = $req->session()->get('cart'); to get session value
        //session()->get('cart')
        if(session()->has('cart')){
            $cart = json_decode(session()->get('cart'));
        }
        $product = array('p_id'=>$id,'qty'=>1,'name'=>$p->Product_name,'price'=>$p->Price,'image'=>$p->image);
        $cart[] = (object)($product);
        $jsonCart = json_encode($cart);
        session()->put('cart',$jsonCart);
        // return session()->get('cart');
        return redirect()->route('StockedProducts');
    }
    public function emptycart(){
        session()->forget('cart');
        if(!session()->has('cart')){
            return "Cart is empty";
        }
        return session('cart');

    }
    public function mycart(){
        // session()->flush();
        $cart = json_decode(session()->get('cart'));
        return view('pages.vendor.cart')
        ->with('cart',$cart);
    }
    public function checkout(Request $req){
        //let when logged in there will be a field in session
        $products = json_decode(session()->get('cart'));
        //creating order
        $customer_id = session()->get('user');
        $order = new Order();
        $order->u_id = $customer_id;
        $order->status="Ordered";
        $order->Price = $req->Price;
        $order->save();
// echo"<pre>";
//         print_r($order);
//             $o_d = new OrderDetail();
//             $o_d->o_id = $order->id;
//             $o_d->p_id =1;
//             $o_d->qty =12;
//             $o_d->Price = 102;
//             $o_d->save();

        //creating order details
        foreach($products as $p){
           
            // print_r($products);
            // print_r($products);
            // print_r($products);
         

            print_r("====", $order->id);
            $o_d = new OrderDetail();
            $o_d->o_id = $order->id;
            $o_d->p_id = $p->p_id;
            $o_d->qty = $p->qty;
            $o_d->Price = $p->price;
            $o_d->save();
        }

        session()->forget('cart');
        //return view('pages.Vendor.StockedProduct');
        return "Pruchase Done!";


    }



    
    public function MyOrderHistory(){
        $products = Order::all();
        return view('pages.vendor.MyOrderHistory')->with('Oders',$products);
    }
    
    public function MyOrderHistorySearched(Request $req){


        $id = $req->id;
        $p = Order::where('o_id',$id)->first();

       
        return view('pages.vendor.MyOrderHistory')->with('Oders',$p);
    }

    public function addProduct(){
        return view('pages.vendor.addProduct');
    }

   



}

