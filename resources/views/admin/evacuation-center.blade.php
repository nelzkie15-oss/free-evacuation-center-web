@extends('layouts.main')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-hotel"></span> Evacuation Center</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Evacuation <Center></Center></li>
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

                  @if(session()->has('mgs_evacen'))
                  <div class="alert alert-success">
                     {{ session()->get('mgs_evacen') }}
                  </div>
                 @endif

                 @if(session()->has('update-completed3'))
                 <div class="alert alert-success">
                    {{ session()->get('update-completed3') }}
                 </div>
                @endif

                @if(session()->has('delete-completed3'))
                <div class="alert alert-success">
                   {{ session()->get('delete-completed3') }}
                </div>
               @endif

                  <!-- form start -->
                  <form action="{{ route('admin.addevacuationcenter') }}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-3">
                              <div class="card-header">
                                 <span class="fa fa-hotel"> Evacuation Center Info</span>
                              </div>
                              <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Center Name</label>
                                       <input type="text" class="form-control @error('center_name') is-invalid @enderror" name="center_name" placeholder="Center Name">
                                    </div>
                                    @error('center_name')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Address</label>
                                       <textarea class="form-control @error('address') is-invalid @enderror" name="address" width="100"></textarea>
                                    </div>
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Contact Info</label>
                                       <input type="text" class="form-control @error('contact_info') is-invalid @enderror" name="contact_info" placeholder="ex. 09827373213">
                                    </div>
                                    @error('contact_info')
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
                  </form>
               </div>

               <div class="col-md-9" style="border-left: 1px solid #ddd;">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Center Name</th>
                           <th>Address</th>
                           <th>Contact</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($evaCenter as $row)
                        <tr>
                           <td>{{$row->id}}</td>
                           <td>{{$row->center_name}}</td>
                           <td>{{$row->address}}</td>
                           <td>{{$row->contact_info}}</td>
                           
                           <td class="text-right">
                              <a class="btn btn-sm btn-success" href="{{ route('admin.evacuationcenter.edit', $row->id)}}"><i class="fa fa-edit"></i> edit</a>
                              <form action="{{ route('admin.evacuationcenter.delete', $row->id)}}" method="post" style="display: inline-block">
                                 @csrf
                                 <button class="btn btn-danger btn-sm" type="submit"><i
                                    class="fa fa-trash-alt"></i> delete</button>
                               </form>
                        
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
               <h3>Are you sure want to delete this Evacuation Center?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   @endsection