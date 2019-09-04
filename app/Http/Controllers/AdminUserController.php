<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Offre;
use App\Hotel;
use App\Chambre;
use App\Reservation;
use App\User;
use Session;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate(10);
        return view ('admin.users.show')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.users.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the form data for the user 
        $userFormData = Request::all();
        // write the validation rules for your form
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ]; 
        // validate the user form data
        $validation = Validator::make($userFormData, $rules);   
        
        // if validation fails
        if($validation->fails())
        {
            // redirect back to the form 
            return redirect()->back();
        }
        // if validation passes
        // save the user to the database
        $user = User::create($userFormData);
        // return a view 
        return view('admin.users.show');
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
        $user=User::find($id);
        return view ('admin.users.edit',compact('user'));
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
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        Session::flash('message', 'Client has been updated!');
        return redirect()->route('admin.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::where('id','=',$id)->first();
        $reservations=Reservation::where('user_id','=',$id)->first();
        if($user->id === $reservations->user_id){
            Session::flash('error', 'Impossible de supprimer! verifier les clés étranger!');
            return back();
          }
          else{
        $user=User::where('id',$id)->delete();
        Session::flash('message', 'User has been deleted!');
        return back();
          }
      }


}
