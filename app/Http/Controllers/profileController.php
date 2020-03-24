<?php

namespace App\Http\Controllers;
use Closure;
use Illuminate\Http\Request;
use App\order;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class profileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $x=DB::table('orders')
        ->select('*','orders.id as orderId')
        ->join('users','users.id','=','user_id')
        ->where('users.id', Auth::user()->id)
        
        ->get();

        return view('user.profile')->with('data',$x);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $x=User::find(Auth::user()->id);

        return view('user.reservation')->with('data',$x);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $x=new order();
        $x->user_id=$request->id;
        $x->msg=$request->msg;
        $x->save();
        $z=User::find(Auth::user()->id);
        $z->name=$request->name;
        $z->address=$request->address;
        $z->phone=$request->phone;
        $z->save();
        return redirect()->route('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $d=order::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
}
