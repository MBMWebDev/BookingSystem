@extends('admin.layouts.admin')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>
     Dashboard
     <small>Control panel</small>
   </h1>
   <ol class="breadcrumb">
     <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
     <li class="active">Dashboard</li>
   </ol>
   @if(Session::has('message'))
    <div class="alert alert-dismissible alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>  {{ Session::get('message') }}</strong>
    </div>
    @endif
 </section>
 @if (count($chambres) === 0)
 <section class="dashboard-counts no-padding-bottom">
   <div class="container-fluid">
     <div class="row">
       <!-- Item -->
       <div class="col-lg-12">
         <div class="card">
           <div class="card-close">
               <a href="{{route('admin.chambres.create')}}"> <button class="btn btn-info"><i class="fa fa-plus"></i> Ajouter</button></a>
           </div>
           <br>
           <br>
           <div class="card-body">
             <div class="alert alert-warning text-center col-md-12">0 chambres</div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <br><br>

 @else
 <!-- Main content -->
 <section class="content">
   <!-- Small boxes (Stat box) -->
   <div class="row">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                  <a href="{{route('admin.chambres.create')}}"> <button class="btn btn-info"><i class="fa fa-plus"></i> Ajouter</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      <div class="row">
                          <div class="col-sm-6">
                              <div class="dataTables_length" id="example1_length">
                                  <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                      <option value="10">10</option>
                                      <option value="25">25</option>
                                      <option value="50">50</option>
                                      <option value="100">100</option>
                                    </select> entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 216px;">Type de Chambre</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 265px;">Numéro</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 235px;">Description</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 186px;">Ajouté le</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 135px;">Modifié le</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($chambres as $chambre)
                    <tr role="row" class="odd">
                      <td class="sorting_1">{{$chambre->type}}</td>
                      <td>{{$chambre->num_room}}</td>
                      <td>{{$chambre->description}}</td>
                      <td>{{$chambre->created_at}}</td>
                      <td>{{$chambre->updated_at}}</td>
                      <td><a href="{{route('admin.chambres.edit',[$chambre->id])}}" class="btn btn-primary">Edit</a></td>
                      <td><a onclick="return confirm('Etes vous sur de vouloir supprimer cette chambre?')" href="{{route('admin.chambres.delete',[$chambre->id])}}" class="btn btn-danger">Delete</a></td>

                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th rowspan="1" colspan="1">Pays</th>
                      <th rowspan="1" colspan="1">Intitulé</th>
                      <th rowspan="1" colspan="1">Prix</th>
                      <th rowspan="1" colspan="1">Photo</th>
                      <th rowspan="1" colspan="1">Contenu</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-5">
                  <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                </div>
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                      <li class="paginate_button active">
                          {{$chambres->links()}}
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
                </div>
                <!-- /.box-body -->
              </div>
   </div>
   <!-- /.row -->
   <!-- Main row -->

   <!-- /.row (main row) -->

 </section>
 <!-- /.content -->
 @endif
 @endsection