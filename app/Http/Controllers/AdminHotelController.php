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

class AdminHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels=Hotel::paginate(10);
        return view ('admin.hotels.show')->with('hotels',$hotels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotels.create');
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
          $hotels=new Hotel;
          $hotels->name=$request->name;
          $hotels->category=$request->category;
          $hotels->description=$request->description;
          $hotels->photo=$request->photo->getClientOriginalName();
          $hotels->save();
          Input::file('photo')->move($destination,$filename1);
          Session::flash('message', 'hotels a été bien ajouter!');    
          return redirect()->route('admin.hotels');
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
        $hotel=Hotel::find($id);
        return view ('admin.hotels.edit')->with('hotel',$hotel);
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
        $hotel=Hotel::find($id);
        if ( Input::hasFile('photo') ) {
            $destination='img/';
            $filename=$request->photo->getClientOriginalName();
            Input::file('photo')->move($destination,$filename);
        }
        else{
            $filename=$hotel->photo;
         }
          $hotel->name=$request->name;
          $hotel->category=$request->category;
          $hotel->description=$request->description;
          $hotel->photo=$filename;
          $hotel->save();
          Session::flash('message', 'Hotel has been added!');
          return redirect()->route('admin.hotels');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hotel=Hotel::where('id',$id)->first();
      $offre=Offre::where('hotel_id',$id)->first();
      //dd($hotel);
      if($hotel->id === $offre->hotel_id){
        Session::flash('error', 'Impossible de supprimer! verifier les clés étranger!');
        return back();
      }
      else{
        $hotel=Hotel::where('id',$id)->delete();
        Session::flash('message', 'Product has been deleted!');
        return back();
      }


      
    }
}
