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
    @if(Session::has('error'))
    <div class="alert alert-dismissible alert-danger">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>  {{ Session::get('error') }}</strong>
    </div>
    @endif
 </section>
 @if (count($hotels) === 0)
 <section class="dashboard-counts no-padding-bottom">
   <div class="container-fluid">
     <div class="row">
       <!-- Item -->
       <div class="col-lg-12">
         <div class="card">
           <div class="card-close">
               <a href="{{route('admin.hotels.create')}}"> <button class="btn btn-info"><i class="fa fa-plus"></i> Ajouter</button></a>
           </div>
           <br>
           <br>
           <div class="card-body">
             <div class="alert alert-warning text-center col-md-12">0 hotels</div>
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
                  <h3 class="box-title">Hotels</h3>&nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="{{route('admin.hotels.create')}}"> <button class="btn btn-info"><i class="fa fa-plus"></i> Ajouter</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                      
                            <div class="row">
                              <div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 216px;">Nom de l'hotel</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 265px;">Categorie</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 235px;">Description</th>
                      <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 186px;">Photos</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($hotels as $hotel)
                    <tr role="row" class="odd">
                      <td class="sorting_1">{{$hotel->name}}</td>
                      <td>{{$hotel->category}}</td>
                      <td>{{$hotel->description}}</td>
                      <td><img src="{{asset('img/'.$hotel->photo)}}" width="100px" height="80px"/></td>
                      <td>{{$hotel->created_at}}</td>
                      <td>{{$hotel->updated_at}}</td>
                      <td><a href="{{route('admin.hotels.edit',[$hotel->id])}}" class="btn btn-primary">Modifier</a></td>
                      <td><a onclick="return confirm('Etes vous sur de vouloir supprimer cette hotel?')" href="{{route('admin.hotels.delete',[$hotel->id])}}" class="btn btn-danger">Supprimer</a></td>

                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                      <th rowspan="1" colspan="1">Nom de l'hotel</th>
                      <th rowspan="1" colspan="1">Categorie</th>
                      <th rowspan="1" colspan="1">Description</th>
                      <th rowspan="1" colspan="1">Photo</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-7">
                  <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                    <ul class="pagination">
                      <li class="paginate_button active">
                          {{$hotels->links()}}
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