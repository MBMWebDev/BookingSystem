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
                <form role="form" action="{{ route('admin.reservations-restau.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="box-body">
                      <div class="form-group">
                          <div class='input-group date' id='datetimepicker2'>
                              <input type='text' class="form-control" name="arrival" />
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                    <div class="form-group">
                      <label for="nbr_adulte">Nombre de personne</label>
                      <input type="number" class="form-control" placeholder="Nombre d'adulte..." name="nbr_personne" min="1"  max="6" value="1" required>
                    </div>
                   <div class="form-group">
                      <label>Restaurent</label>
                      <select class="form-control" name="restaurent_id" id="restaurent_id" required>
                          <option value="" selected="selected" disabled="disabled">Séléctionez une offre</option>
                        @foreach($restaurents as $offre)
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

 @endsection