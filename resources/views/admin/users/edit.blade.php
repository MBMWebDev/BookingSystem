@extends('admin.layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Modification d'un user
    </h1>
  </section>
 
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      
         <div class="box box-primary">
                 <div class="box-header with-border">
                   <h3 class="box-title">Info du client : {{$user->intitule}}</h3>
                 </div>
                 <!-- /.box-header -->
                 <!-- form start -->
                 <form role="form" action="{{ route('admin.users.update',[$user->id]) }}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                   <div class="box-body">
                     <div class="form-group">
                       <label for="pays">Nom & Prénom :</label>
                     <input type="text" class="form-control" id="pays" placeholder="Pays" name="name" value="{{$user->name}}">
                     </div>
                     <div class="form-group">
                       <label for="intitule">E-mail</label>
                       <input type="text" class="form-control" id="intitule" placeholder="Intitulé" name="email" value="{{$user->email}}">
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