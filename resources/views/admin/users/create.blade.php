@extends('admin.layouts.admin')
@section('content')
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
     <div class="col-md-4" >
        <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="pays">Nom & Prénom</label>
                      <input type="text" class="form-control" id="pays" placeholder="Nom & Prénom..." name="name" required>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" placeholder="exemple@exemple.com..." name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">Mot de passe</label>
                      <input type="password" class="form-control" id="password" placeholder="Mot de passe..." name="password" required>
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