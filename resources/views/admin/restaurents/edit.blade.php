@extends('admin.layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
      Modification d'un restaurent
    </h1>
  </section>
 
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      
         <div class="box box-primary">
                 <div class="box-header with-border">
                   <h3 class="box-title">Intitulé de l'restaurent : {{$restaurent->name}}</h3>
                 </div>
                 <!-- /.box-header -->
                 <!-- form start -->
                 <form role="form" action="{{ route('admin.restaurents.update',[$restaurent->id]) }}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                   <div class="box-body">
                     <div class="form-group">
                       <label for="pays">Nom de l'restaurent</label>
                     <input type="text" class="form-control" id="pays" placeholder="Pays" name="name" value="{{$restaurent->name}}">
                     </div>
                     <div class="form-group">
                      <label>Catégorie</label>
                      <select class="form-control" name="category">
                        <option selected="selected">{{$restaurent->category}}</option>
                        <option value="" disabled="disabled">─────────────────────────</option>
                        <option>*</option>
                        <option>**</option>
                        <option>***</option>
                        <option>****</option>
                        <option>*****</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3" placeholder="Description ..." name="description">{{$restaurent->description}}</textarea>
                    </div>
                     <div class="form-group">
                       <label for="exampleInputFile">Photo</label>
                       <input type="file" id="exampleInputFile" name="photo" value="{{$restaurent->photo}}">
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