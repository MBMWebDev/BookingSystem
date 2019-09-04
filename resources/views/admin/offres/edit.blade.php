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
                   <h3 class="box-title">Intitulé de l'offre : {{$offre->name}}</h3>
                 </div>
                 <!-- /.box-header -->
                 <!-- form start -->
                 <form role="form" action="{{ route('admin.offres.update',[$offre->id]) }}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="box-body">
                        <div class="form-group">
                          <label for="pays">Intitulé</label>
                        <input type="text" class="form-control" id="pays" placeholder="Intitulé" name="name" value="{{$offre->name}}">
                        </div>
                        <div class="form-group">
                          <label>Type Séjour</label>
                          <select class="form-control" name="type_sejour">
                            <option>AI</option>
                            <option>PC</option>
                            <option>DP</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Hotel</label>
                          <select class="form-control" name="hotel_id">
                            <option selected="selected" value="{{$offre->hotel_id}}">{{$offre->hotels['name']}}</option>
                            <option value="" disabled="disabled">─────────────────────────</option>
                            @foreach($hotels as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Description ..." name="description">{{$offre->description}}</textarea>
                              </div>
                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="text" class="form-control" id="prix" placeholder="Prix" name="prix" value="{{$offre->prix}}">
                         </div>
                        <div class="form-group">
                          <label for="exampleInputFile">Photo</label>
                          <input type="file" id="exampleInputFile" name="photo">
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