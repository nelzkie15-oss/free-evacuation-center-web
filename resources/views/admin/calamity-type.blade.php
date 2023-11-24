@extends('layouts.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-globe-asia"></span> Calamity Type</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Calamity Type</li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">
                  <!-- form start -->
                  @if(session()->has('mgs'))
                     <div class="alert alert-success">
                        {{ session()->get('mgs') }}
                     </div>
                  @endif

                  @if(session()->has('update-completed'))
                  <div class="alert alert-success">
                     {{ session()->get('update-completed') }}
                  </div>
                 @endif

                 @if(session()->has('delete-completed'))
                 <div class="alert alert-success">
                    {{ session()->get('delete-completed') }}
                 </div>
                @endif


                  <form action="{{ route('admin.addcalamitytype') }}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="card-header">
                                 <span class="fa fa-globe-asia"> Calamity Information</span>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Calamity Name</label>
                                       <input type="text" class="form-control @error('calamity_name') is-invalid @enderror" name="calamity_name"   placeholder="Calamity name">
                                    </div>
                                    @error('calamity_name')
                                       <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary w-100">Save</button>
                                    </div>
                                 </div>
                              </div>
                              {{-- <div class="col-md-12">
                                 <button type="submit" class="btn btn-primary w-100">Save</button>
                              </div> --}}
                      </form>
                   </div>

               <div class="col-md-9">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Calamity Name</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($calamitytype as $row)
                        <tr>
                           <td>{{$row->id}}</td>
                           <td>{{$row->calamity_name}}</td>
                           
                           <td class="text-right">
                              <a class="btn btn-sm btn-success" href="{{ route('admin.calamitytype.edit', $row->id)}}"><i class="fa fa-edit"></i> edit</a>
                              <form action="{{ route('admin.calamitytype.delete', $row->id)}}" method="post" style="display: inline-block">
                                 @csrf
                                 <button class="btn btn-danger btn-sm" type="submit"><i
                                    class="fa fa-trash-alt"></i> delete</button>
                               </form>
                              {{-- <a class="btn btn-sm btn-danger" href="{{ route('admin.calamitytype.delete', $row->id)}}"><i
                                    class="fa fa-trash-alt"></i> delete</a> --}}
                           </td>
                        </tr>
                        @endforeach
                        </tbody>
                  </table>
               </div>
            </div>
      </div>

   </div>
   <!-- /.card-body -->
   </div>
   </div>
   <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   <div id="delete" class="modal animated rubberBand delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-body text-center">
               <img src="../asset/img/sent.png" alt="" width="50" height="46">
               <h3>Are you sure want to delete this Calamity type?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   @endsection