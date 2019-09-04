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
                   <h3 class="box-title">Intitulé de l'offre : {{$offre->intitule}}</h3>
                 </div>
                 <!-- /.box-header -->
                 <!-- form start -->
                 <form role="form" action="{{ route('admin.offres.update',[$offre->id]) }}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                   <div class="box-body">
                     <div class="form-group">
                       <label for="pays">Pays</label>
                     <input type="text" class="form-control" id="pays" placeholder="Pays" name="pays" value="{{$offre->pays}}">
                     </div>
                     <div class="form-group">
                       <label for="intitule">Intitulé</label>
                       <input type="text" class="form-control" id="intitule" placeholder="Intitulé" name="intitule" value="{{$offre->intitule}}">
                     </div>
                     <div class="form-group">
                             <label>Contenu</label>
                             <textarea class="form-control" rows="3" placeholder="Enter ..." name="contenu">{{$offre->contenu}}</textarea>
                           </div>
                     <div class="form-group">
                         <label for="prix">Prix</label>
                         <input type="text" class="form-control" id="prix" placeholder="Prix" name="prix" value="{{$offre->prix}}">
                      </div>
                     <div class="form-group">
                       <label for="exampleInputFile">Photo</label>
                       <input type="file" id="exampleInputFile" name="photo" value="{{$offre->photo}}">
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