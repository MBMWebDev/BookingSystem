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
use Session;

class AdminOffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbhotels=Hotel::count();
        $nboffres=Offre::count();
        $nbreservations=Reservation::count();
        $nbusers=User::count();
        $offres=Offre::paginate(10);
        return view ('admin.offres.show')->with('offres',$offres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels=Hotel::all();
        return view('admin.offres.create',compact('hotels'));
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
          $offres=new Offre;
          $offres->name=$request->name;
          $offres->type_sejour=$request->type_sejour;
          $offres->hotel_id=$request->hotel_id;
          $offres->description=$request->description;
          $offres->prix=$request->prix;
          $offres->photo=$request->photo->getClientOriginalName();
          $offres->save();
          Input::file('photo')->move($destination,$filename1);
          Session::flash('message', 'offres a été bien ajouter!');    
          return redirect()->route('admin.offres');
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
        $offre=Offre::find($id);
        $hotels=Hotel::all();
        return view('admin.offres.edit',compact('offre','hotels'));


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
        $offre=Offre::find($id);
        if ( Input::hasFile('photo') ) {
            $destination='img/';
            $filename=$request->photo->getClientOriginalName();
            Input::file('photo')->move($destination,$filename);
        }
        else{
            $filename=$offre->photo;
         }
          $offre->name=$request->name;
          $offre->type_sejour=$request->type_sejour;
          $offre->hotel_id=$request->hotel_id;
          $offre->description=$request->description;
          $offre->prix=$request->prix;
          $offre->photo=$filename;
          $offre->save();
          Session::flash('message', 'Offre has been updated!');
          return redirect()->route('admin.offres');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $offre=Offre::where('id',$id)->delete();
      Session::flash('message', 'Product has been deleted!');
      return back();
    }
}
