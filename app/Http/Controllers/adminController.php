<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\Auth;
use App\order;
use App\User;
class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('adminCheck');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $x=Content::all();
        return view('admin.content.index')->with('data',$x);

    }
    public function addAdmin()
    {
        //
        
        return view('admin.add.addAdmin');

    }
    public function add()
    {
        //
        $x=User::select('*')
        ->where('role','=','0')
        ->get();
        return view('admin.add.index')->with('data',$x);

    }
    public function order()
    {
        //
        $x=order::select('*')
        ->join('users','users.id','=','user_id')
        ->orderByRaw('users.id')
        ->get();
        
        
        return view('admin.orders.index')->with('data',$x);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.content.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $x=new Content();
        $img = $request->img;
        $img_name = time().$img->getClientOriginalName();

        $img->move('uploads/img',$img_name);

        $x->img = 'uploads/img/' . $img_name;
        $x->title=$request->title;
        $x->save();
        return redirect()->route('content');
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
        $x=Content::findOrFail($id);
        return view('admin.content.edit')->with('d',$x);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $x=Content::findOrFail($id);
        $img = $request->img;
        $img_name = time().$img->getClientOriginalName();

        $img->move('uploads/img',$img_name);

        $x->img = 'uploads/img/' . $img_name;
        $x->title=$request->title;
        $x->save();
        return redirect()->route('content');

        
    }

    public function destroy($id)
    {
        //
        $d=Content::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
    public function deleteuser($id)
    {
        //
        $d=User::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
}
