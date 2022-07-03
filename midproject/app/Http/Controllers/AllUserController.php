<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\all_user;
use App\Http\Requests\Storeall_userRequest;
use App\Http\Requests\Updateall_userRequest;

class AllUserController extends Controller
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
     * @param  \App\Http\Requests\Storeall_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeall_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function show(all_user $all_user)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function edit(all_user $all_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateall_userRequest  $request
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updateall_userRequest $request, all_user $all_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\all_user  $all_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(all_user $all_user)
    {
        //
    }
    public function Registration()
    {
        return view('pages.public.registration');
    }
    public function registrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            'email'=>'email',
            'phone'=>'required',
            'nid'=>'required',
            'address'=>'required',
            'type'=>'required',
             'password'=>'required| min:8 | max:12'
        ]);
        
        $st = new all_user();
        $st->name = $request->name;
        $st->email = $request->email;
        $st->phone = $request->phone;
        $st->nid = $request->nid;
        $st->address = $request->address;
        $st->password = $request->password;
        $st->type = $request->type;
        $st->status = "active";
        if($st)
        {
            $st->save();
            $request->session()->put('user',$st->id);
            return redirect()->route('login');
        }
    }

    public function login()
    {
        return view('pages.public.login');
    }
    public function loginSubmitted(Request $request)
    {
        $validate = $request->validate([
            'email'=>'email',
             'password'=>'required| min:8 | max:20'
        ]);
        $stu = all_user::where('email',$request->email)
                       ->where('password',$request->password)
                        ->first();
        if($stu->type =='vendor'){
            $request->session()->put('user',$stu->id);
            return redirect()->route('vendorDashboard');
        }
          
                     
    }
    public function adminDashboard(Request $request)
    {
       
        $value = $request->session()->get('user');
        $stu = all_user::where('id',$value)->first();
        if($stu)
        {
            return view('pages.admin.dashboard');
        }
       
    }



    public function vendorDashboard(Request $request)
    {
       
        $value = $request->session()->get('user');
        $stu = all_user::where('id',$value)->first();
        if($stu)
        {
            return view('pages.vendor.vendorDashboard');
        }
       
    }

    public function CreateCard()
    {
       
       
       
            return view('pages.vendor.CreateCard');
            // return view('pages.vendor.vendorDashboard');
       
       
    }

    



    




    public function StockedProducts(Request $request)
    {
        $value = $request->session()->get('user');
        $stu = all_user::where('id',$value)->first();
        if($stu)
        {
            return view('pages.vendor.stockedproducts');
        }
       
    }









    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
