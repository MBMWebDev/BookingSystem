<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Offre;
use App\Hotel;
use App\Chambre;
use App\Reservation;
use App\User;
use App\Restaurent;
use Session;

class AdminRestaurentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurents=Restaurent::paginate(10);
        return view ('admin.restaurents.show')->with('restaurents',$restaurents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( Input::hasFile('photo') ) {
            $destination='img/';
            $filename1=$request->photo->getClientOriginalName();
          $restaurents=new Restaurent;
          $restaurents->name=$request->name;
          $restaurents->category=$request->category;
          $restaurents->description=$request->description;
          $restaurents->photo=$request->photo->getClientOriginalName();
          $restaurents->save();
          Input::file('photo')->move($destination,$filename1);
          Session::flash('message', 'restaurent a été bien ajouter!');    
          return redirect()->route('admin.restaurents');
        }
        else{
          return 'try again !';
         }
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
        $restaurent=Restaurent::find($id);
        return view ('admin.restaurents.edit')->with('restaurent',$restaurent);
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
        $restaurent=Restaurent::find($id);
        if ( Input::hasFile('photo') ) {
            $destination='img/';
            $filename=$request->photo->getClientOriginalName();
            Input::file('photo')->move($destination,$filename);
        }
        else{
            $filename=$restaurent->photo;
         }
          $restaurent->name=$request->name;
          $restaurent->category=$request->category;
          $restaurent->description=$request->description;
          $restaurent->photo=$filename;
          $restaurent->save();
          Session::flash('message', 'restaurent has been added!');
          return redirect()->route('admin.restaurents');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurent=Restaurent::where('id',$id)->delete();
      Session::flash('message', 'Restaurent has been deleted!');
      return back();
    }
}
