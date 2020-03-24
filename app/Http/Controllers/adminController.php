<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Content;
use Illuminate\Support\Facades\Auth;
use App\order;
use App\User;
use App\Guest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
    public function msg()
    {
        $x=Guest::all();
        return view('admin.message')->with('data',$x);
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
        $x=DB::table('orders')
        ->select('*','orders.id as orderId')
        ->join('users','users.id','=','user_id')
        ->orderByRaw('users.id')
        ->get();
        
        // $x = User::find(Auth::user()->id);
        
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



    
    public function updateOrderComment(Request $request)
    {
        order::where('id',$request->id)->update([
            'comment' => $request->comment
        ]);
        return redirect()->back();
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

        $deleteOldImage = 0;
        //
        $x=Content::findOrFail($id);
        
        $old_image = $x->img;
        $img = $request->img;

        if($img){
            $deleteOldImage = 1;
            $img_name = time().$img->getClientOriginalName();
            $img->move('uploads/img',$img_name);
            $x->img = 'uploads/img/' . $img_name;
        }
        
        $x->title=$request->title;
        
        if($x->save() && $deleteOldImage == 1){
                File::delete($old_image);
        }
        return redirect()->route('content');        
    }

    public function destroy($id)
    {
        //
        $d=Content::findOrFail($id);
        $old_image = $d->img;
        if($d->delete()){
            File::delete($old_image);
        }
        
        return redirect()->back();
    }
    public function deleteuser($id)
    {
        //
        $d=User::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
    public function deletemsg($id)
    {
        //
        $d=order::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
    public function deleteguestmsg($id)
    {
        //
        $d=Guest::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
}
