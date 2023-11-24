@extends('layouts.main')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-address-card"></span> Manage Evacuees</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Evacuees</li>
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

                  @if(session()->has('mgs_evacueesinfo'))
                  <div class="alert alert-success">
                     {{ session()->get('mgs_evacueesinfo') }}
                  </div>
                 @endif


                  @if(session()->has('update-completed4'))
                  <div class="alert alert-success">
                     {{ session()->get('update-completed4') }}
                  </div>
                 @endif

                 @if(session()->has('delete-completed4'))
                 <div class="alert alert-success">
                    {{ session()->get('delete-completed4') }}
                 </div>
                @endif


               <div class="col-md-12">
                  <table id="example1" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Evacuees info</th>
                           <th>Barangay</th>
                           <th>Address</th>
                           <th>Head of Family</th>
                           <th>Evacuation Center</th>
                           <th class="text-right">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($evaInfo as $row)
                        <tr>
                           <td>{{$row->id}}</td>
                           <td>
                              <p class="info">Name: <b>{{ Str::ucfirst($row->first_name) .' '. Str::ucfirst($row->middle_name) .' '. Str::ucfirst($row->last_name)}}</b></p>
                              <p class="info"><small>Age: <b>{{$row->age}}</b></small></p>
                              <p class="info"><small>Gender: <b>{{$row->gender}}</b></small></p>
                              <p class="info"><small>Contact: <b>{{$row->contacts}}</b></small></p>
                           </td>
                           <td>{{ Str::ucfirst($row->barangay) }}</td>
                           <td><b>{{ Str::ucfirst($row->address) }}</b></td>
                           <td>{{ Str::ucfirst($row->head_of_family) }}</td>
                           <td>{{ Str::ucfirst($row->evacuation_center) }}</td>
                           <td class="text-right">
                              <a class="btn btn-sm btn-success" href="{{ route('admin.evacueeinformation.edit', $row->id)}}"><i class="fa fa-edit"></i> edit</a>
                              <form action="{{ route('admin.evacueeinformation.delete', $row->id)}}" method="post" style="display: inline-block">
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
               <h3>Are you sure want to delete this Evacuees?</h3>
               <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                  <button type="submit" class="btn btn-danger">Delete</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- jQuery -->
   @endsection