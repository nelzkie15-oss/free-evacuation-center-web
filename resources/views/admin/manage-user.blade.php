@extends('layouts.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-user-lock"></span> Manage Users</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         @if(session()->has('mgs_user'))
         <div class="alert alert-success">
            {{ session()->get('mgs_user') }}
         </div>
        @endif

        @if(session()->has('update-completed5'))
        <div class="alert alert-success">
           {{ session()->get('update-completed5') }}
        </div>
       @endif

       @if(session()->has('delete-completed5'))
       <div class="alert alert-success">
          {{ session()->get('delete-completed5') }}
       </div>
      @endif
         <!-- /.content-header -->
         <!-- Main content -->
         <section class="content">
            <div class="container-fluid">
               <div class="card card-info">

               <div class="col-md-12">
                  <table id="example1" class="table table-bordered table-hover">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Users Name</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th>Account Status</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($users as $row)
                        <tr>
                           <td>{{$row->id}}</td>
                           <td>
                              <p class="info">Name: <b>{{ Str::ucfirst($row->name) }}</b></p>
                           </td>
                           <td>{{ $row->email }}</td>
                           <td>{{ $row->role }}</td>
                           <td><b>
                                @if($row->status == 'active')
                                   <span class='badge badge-success'>Active</span>
                                 @else
                                  <span class='badge badge-danger'>Inactive</span>
                                 @endif
                              </b></td>
                           <td class="text-right">
                              <a class="btn btn-sm btn-success" href="{{ route('admin.user.edit', $row->id)}}"><i class="fa fa-edit"></i> edit</a>
                              <form action="{{ route('admin.user.delete', $row->id)}}" method="post" style="display: inline-block">
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
               <h3>Are you sure want to delete this User?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   @endsection