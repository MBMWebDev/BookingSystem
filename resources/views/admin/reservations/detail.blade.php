@extends('admin.layouts.admin')
@section('content')
<section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         <div class="col-md-6" >
     
             <div class="box box-primary">
                     <div class="box-header with-border">
                       <h3 class="box-title">Quick Example</h3>
                     </div>
                     <!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" enctype="multipart/form-data">
                         {{ csrf_field() }}
                       <div class="box-body">
                         <div class="form-group">
                           <label>Date d'arrivé:</label>
           
                           <div class="input-group date">
                             <div class="input-group-addon">
                               <i class="fa fa-calendar"></i>
                             </div>
                             <input type="text" class="form-control pull-right" id="TextBox1" name="arrival" value="{{$reservation->arrival}}" disabled>
                           </div>
                           <!-- /.input group -->
                         </div>
                         <div class="form-group">
                           <label>Date de départ:</label>
           
                           <div class="input-group date">
                             <div class="input-group-addon">
                               <i class="fa fa-calendar"></i>
                             </div>
                             <input type="text" class="form-control pull-right" id="TextBox2" name="departure" required value="{{$reservation->departure}}" disabled>
                           </div>
                           <!-- /.input group -->
                         </div>
                         <div class="form-group">
                           <label for="TextBox3">Nombre de jours</label>
                           <input type="text" class="form-control" id="TextBox3" placeholder="Nbr de nuits" name="nbr_nuits" readonly value="{{$reservation->nbr_nuits}}">
                         </div>
                         <div class="form-group">
                           <label for="nbr_adulte">Nombre d'adulte</label>
                           <input type="number" class="form-control" id="nbr_adulte" placeholder="Nombre d'adulte..." name="nbr_adulte" min="1"  max="4" value="1" required value="{{$reservation->nbr_adulte}}" readonly>
                         </div>
                         <div class="form-group">
                           <label for="nbr_enf">Nombre d'enfant</label>
                           <input id="yith-wcbk-booking-persons-type-389" name="person_types0" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="4" data-person-type-id="389" value="{{$reservation->person_types0}}" type="number" readonly>
                           <!--<input type="number" class="form-control" id="nbr_enf" placeholder="Nombre d'enfant(s)" name="nbr_enf" min="0" value="0">-->
                         </div>
                         <div class="form-group" id="yith-wcbk-booking-persons-type-450">
                           <label for="age_enf">Age d'enfant</label>
                           <input id="age_enf" name="person_types1" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="450" value="{{$reservation->person_types1}}" type="number" readonly>                    </div>
                         <div class="form-group" id="yith-wcbk-booking-persons-type-451">
                             <label for="age_enf">Age d'enfant 2 </label>
                             <input  id="age_enf" name="person_types2" class=" form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="451" value="{{$reservation->person_types2}}" type="number" readonly>                      </div>
                           <div class="form-group" id="yith-wcbk-booking-persons-type-452">
                               <label for="age_enf">Age d'enfant 3</label>
                               <input  id="age_enf" name="person_types3" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="452" value="{{$reservation->person_types3}}" type="number" readonly>                        </div>
                             <div class="form-group" id="yith-wcbk-booking-persons-type-453">
                                 <label for="age_enf">Age d'enfant 4</label>
                                 <input  id="age_enf" name="person_types4" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="453" value="{{$reservation->person_types4}}" type="number" readonly>                          </div>
     
                         <div class="form-group">
                           <label>Type Chambre</label>
                           <input type="text" class="form-control" value="{{ $reservation->type_chambre }}" readonly>
                         </div>
                         <div class="form-group">
                           <label>Offre</label>
                           <input type="text" class="form-control" value="{{ $reservation->offres->name }}" readonly>
                         </div>
                         <div class="form-group">
                           <label>Nom & Prénom</label>
                           <input type="text" class="form-control" value="{{ $reservation->users->name }}" readonly>
                         </div>
                         <div class="form-group">
                           <label for="total">Prix par personne</label>
                           <input type="text" class="form-control" id="price"  name="price" value="{{$reservation->offres->prix }}DT" readonly>
                         </div>
                         <div class="form-group">
                                 <label for="total">Total à payer</label>
                                 <input type="text" class="form-control" id="total" placeholder="total" name="total" value="{{$reservation->total }} DT"readonly>
                               </div>
                       </div>
                     </div>
     
                       <!-- /.box-body -->
                     </form>
                   </div>
        </div>
       </div>
        <!-- /.row -->
        <!-- Main row -->
     
        <!-- /.row (main row) -->
     
      </section>
@endsection