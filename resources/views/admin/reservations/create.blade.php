@extends('admin.layouts.admin')
@section('content')
<style>
  
#yith-wcbk-booking-persons-type-450{
    display: none;
    }
#yith-wcbk-booking-persons-type-451{
    display: none;
    }
#yith-wcbk-booking-persons-type-452{
    display: none;
    }
#yith-wcbk-booking-persons-type-453{
    display: none;
    }
  </style>
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
     Ajouter un offre
   </h1>
 </section>

 <!-- Main content -->
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
                <form role="form" action="{{ route('admin.reservations.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label>Date d'arrivé:</label>
      
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="TextBox1" name="arrival" required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label>Date de départ:</label>
      
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="TextBox2" name="departure" required>
                      </div>
                      <!-- /.input group -->
                    </div>
                    <div class="form-group">
                      <label for="TextBox3">Nombre de jours</label>
                      <input type="text" class="form-control" id="TextBox3" placeholder="Nombre de nuité" name="nbr_nuits" readonly>
                    </div>
                    <div class="form-group">
                      <label for="nbr_adulte">Nombre d'adulte</label>
                      <input type="number" class="form-control" id="nbr_adulte" placeholder="Nombre d'adulte..." name="nbr_adulte" min="1"  max="4" value="1" required>
                    </div>
                    <div class="form-group">
                      <label for="nbr_enf">Nombre d'enfant</label>
                      <input id="yith-wcbk-booking-persons-type-389" name="person_types0" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="4" data-person-type-id="389" value="0" type="number">
                      <!--<input type="number" class="form-control" id="nbr_enf" placeholder="Nombre d'enfant(s)" name="nbr_enf" min="0" value="0">-->
                    </div>
                    <div class="form-group" id="yith-wcbk-booking-persons-type-450">
                      <label for="age_enf">Age d'enfant</label>
                      <input id="age_enf" name="person_types1" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="450" value="" type="number">                    </div>
                    <div class="form-group" id="yith-wcbk-booking-persons-type-451">
                        <label for="age_enf">Age d'enfant 2 </label>
                        <input  id="age_enf" name="person_types2" class=" form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="451" value="" type="number">                      </div>
                      <div class="form-group" id="yith-wcbk-booking-persons-type-452">
                          <label for="age_enf">Age d'enfant 3</label>
                          <input  id="age_enf" name="person_types3" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="452" value="" type="number">                        </div>
                        <div class="form-group" id="yith-wcbk-booking-persons-type-453">
                            <label for="age_enf">Age d'enfant 4</label>
                            <input  id="age_enf" name="person_types3" class="form-control yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="12" data-person-type-id="453" value="" type="number">                          </div>

                    <div class="form-group">
                      <label>Type Chambre</label>
                      <select class="form-control" name="type_chambre" required>
                        <option>Single</option>
                        <option>Double</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Offre</label>
                      <select class="form-control" name="offre_id" id="offre_id" required>
                          <option value="" selected="selected" disabled="disabled">Séléctionez une offre</option>
                        @foreach($offres as $offre)
                        <option value="{{$offre->id}}" data-price="{{ $offre->prix }}">{{$offre->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Client</label>
                      <select class="form-control" name="user_id" required>
                        @foreach($users as $hotel)
                        <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="total">Prix par personne</label>
                      <input type="text" class="form-control" id="price"  name="price">
                    </div>
                    <div class="form-group">
                            <label for="total">Total à payer</label>
                            <input type="text" class="form-control" id="total" placeholder="total" name="total">
                          </div>
                  </div>
                </div>

                  <!-- /.box-body -->
    
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
   </div>
  </div>
   <!-- /.row -->
   <!-- Main row -->

   <!-- /.row (main row) -->

 </section>
 <!-- /.content -->
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
 <script type="text/javascript">
 
     $(document).ready(function() {
         //this calculates values automatically 
         sum();
         $("#nbr_adulte, #price").on("keydown keyup click", function() {
             sum();
         });
     });
     
     function sum() {
                 var nbr_adulte = document.getElementById('nbr_adulte').value;
                 var price = document.getElementById('price').value;
                 var total = parseInt(nbr_adulte) * parseInt(price);
                 if (!isNaN(total)) {
                     document.getElementById('total').value = total;
                 }
             }
         </script>
 @endsection