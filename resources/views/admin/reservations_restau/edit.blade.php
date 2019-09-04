@extends('admin.layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Modification d'un offre
    </h1>
  </section>
 
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      
         <div class="box box-primary">
                 <div class="box-header with-border">
                   <h3 class="box-title">Intitulé de l'offre : {{$reservation->id}}</h3>
                 </div>
                 <!-- /.box-header -->
                 <!-- form start -->
                 <form role="form" action="{{ route('admin.reservations.update',[$reservation->id]) }}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="box-body">
                        <div class="form-group">
                          <label>Date d'arrivé:</label>
          
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="TextBox1" name="arrival" value="{{$reservation->arrival}}">
                          </div>
                          <!-- /.input group -->
                        </div>
                        <div class="form-group">
                          <label>Date de départ:</label>
          
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="TextBox2" name="departure" value="{{$reservation->departure}}">
                          </div>
                          <!-- /.input group -->
                        </div>
                        <div class="form-group">
                          <label for="TextBox3">Nombre de jours</label>
                          <input type="text" class="form-control" id="TextBox3" placeholder="Intitulé" name="nbr_nuits" value="{{$reservation->nbr_nuits}}">
                        </div>
                        <div class="form-group">
                          <label for="nbr_adulte">Nombre d'adulte</label>
                          <input type="number" class="form-control" id="nbr_adulte" placeholder="Nombre d'adulte..." name="nbr_adulte" min="1"  max="4" value="{{$reservation->nbr_adulte}}">
                        </div>
                        <div class="form-group">
                          <label for="nbr_enf">Nombre d'enfant</label>
                          <input id="yith-wcbk-booking-persons-type-389" name="person_types0" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="4" data-person-type-id="389" value="{{$reservation->person_types0}}" type="number">
                          <!--<input type="number" class="form-control" id="nbr_enf" placeholder="Nombre d'enfant(s)" name="nbr_enf" min="0" value="0">-->
                        </div>
                        <div class="form-group" id="yith-wcbk-booking-persons-type-450">
                          <label for="age_enf">Age d'enfant</label>
                          <input id="age_enf" name="person_types1" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="450" value="{{$reservation->person_types1}}" type="number">                    </div>
                        <div class="form-group" id="yith-wcbk-booking-persons-type-451">
                            <label for="age_enf">Age d'enfant 2 </label>
                            <input  id="age_enf" name="person_types2" class=" form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="451" value="{{$reservation->person_types2}}" type="number">                      </div>
                          <div class="form-group" id="yith-wcbk-booking-persons-type-452">
                              <label for="age_enf">Age d'enfant 3</label>
                              <input  id="age_enf" name="person_types3" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="452" value="{{$reservation->person_types3}}" type="number">                        </div>
                            <div class="form-group" id="yith-wcbk-booking-persons-type-453">
                                <label for="age_enf">Age d'enfant 4</label>
                                <input  id="age_enf" name="person_types3" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="453" value="{{$reservation->person_types4}}" type="number">                          </div>
    
                        <div class="form-group">
                          <label>Type Chambre</label>
                          <select class="form-control" name="type_chambre">
                            <option selected="selected">{{$reservation->type_chambre}}</option>
                            <option value="" disabled="disabled">─────────────────────────</option>
                            <option>Single</option>
                            <option>Double</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Offre</label>
                          <select class="form-control" name="offre_id">
                              <option selected="selected" value="{{$reservation->offre_id}}" data-price="{{ $offre->prix }}">{{$reservation->offres->name}}</option>
                              <option value="" disabled="disabled">─────────────────────────</option>
                              @foreach($offres as $offre)
                              <option value="{{$offre->id}}" data-price="{{ $offre->prix }}">{{$offre->name}}</option>
                              @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Client</label>
                          <select class="form-control" name="user_id">
                              <option selected="selected" value="{{$reservation->user_id}}">{{$reservation->users->name}}</option>
                              <option value="" disabled="disabled">─────────────────────────</option>
                              @foreach($users as $user)
                              <option value="{{$user->id}}">{{$user->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total">Prix par personne</label>
                            <input type="text" class="form-control" id="price"  name="price">
                          </div>
                        <div class="form-group">
                                <label for="total">Total à payer</label>
                                <input type="text" class="form-control" id="total" placeholder="total" name="total" value="{{$reservation->total}}">
                              </div>
                      </div>
                   <!-- /.box-body -->
     
                   <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                   </div>
                 </form>
               </div>
    </div>
    <!-- /.row -->
    <!-- Main row -->
 
    <!-- /.row (main row) -->
 
  </section>
  <!-- /.content -->
 @endsection