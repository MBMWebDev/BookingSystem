<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offre;
use App\Hotel;
use App\Chambre;
use App\Reservation;
use App\User;
use Session;

class AdminReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations=Reservation::paginate(10);
        return view ('admin.reservations.show')->with('reservations',$reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotels=Hotel::all();
        $offres=Offre::all();
        $users=User::all();
        return view('admin.reservations.create',compact('hotels','offres','users'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $reservations=new Reservation;
          $reservations->arrival=$request->arrival;
          $reservations->departure=$request->departure;
          $reservations->nbr_nuits=$request->nbr_nuits;
          $reservations->nbr_adulte=$request->nbr_adulte;
          $reservations->type_chambre=$request->type_chambre;
          $reservations->person_types0=$request->person_types0;
          $reservations->person_types1=$request->person_types1;
          $reservations->person_types2=$request->person_types2;
          $reservations->person_types3=$request->person_types3;
          $reservations->person_types4=$request->person_types4;
          $reservations->offre_id=$request->offre_id;
          $reservations->user_id=$request->user_id;
          $reservations->total=$request->total;
          $reservations->save();
          Session::flash('message', 'reservation a été bien ajouter!');    
          return redirect()->route('admin.reservations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation=Reservation::find($id);
        return view ('admin.reservations.detail',compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation=Reservation::find($id);
        $offres=Offre::all();
        $users=User::all();
        return view('admin.reservations.edit',compact('reservation','offres','users'));
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
        $reservations=Reservation::find($id);
          $reservations->arrival=$request->arrival;
          $reservations->departure=$request->departure;
          $reservations->nbr_nuits=$request->nbr_nuits;
          $reservations->nbr_adulte=$request->nbr_adulte;
          $reservations->type_chambre=$request->type_chambre;
          $reservations->person_types0=$request->person_types0;
          $reservations->person_types1=$request->person_types1;
          $reservations->person_types2=$request->person_types2;
          $reservations->person_types3=$request->person_types3;
          $reservations->person_types4=$request->person_types4;
          $reservations->offre_id=$request->offre_id;
          $reservations->user_id=$request->user_id;
          $reservations->total=$request->total;
          $reservations->save();
          Session::flash('message', 'reservation a été bien ajouter!');    
          return redirect()->route('admin.reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation=Reservation::where('id',$id)->delete();
      Session::flash('message', 'Reservation supprimée!');
      return back();
    }
}
