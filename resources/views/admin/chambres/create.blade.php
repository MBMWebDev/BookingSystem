@extends('admin.layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
     Ajouter une chambres
   </h1>
 </section>

 <!-- Main content -->
 <section class="content">
   <!-- Small boxes (Stat box) -->
   <div class="row">
     
        <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.chambres.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="pays">Numéro de Chambre</label>
                      <input type="text" class="form-control" id="pays" placeholder="Numéro..." name="num_room">
                    </div>
                    <div class="form-group">
                      <label>Type</label>
                      <select class="form-control" name="type">
                        <option>Single</option>
                        <option>Double</option>
                        <option>Triple</option>
                      </select>
                    </div>
                    <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="3" placeholder="Description ..." name="description"></textarea>
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