@extends('layouts.main')
@section('content')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6 animated bounceInRight">
                     <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-user-lock"></span> Add Users</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Users</li>
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
                  <div class="card-header">
                     <h3 class="card-title">Users Information</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('admin.addUser') }}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Full Name</label>
                                       <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" placeholder="Full Name">
                                       @error('name')
                                       <span class="" style="color:#dc3545">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                      @enderror
                                    </div>
                                 </div>

                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Email Address</label>
                                       <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" placeholder="Full Name">
                                       @error('email')
                                       <span class="" style="color:#dc3545">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                      @enderror
                                    </div>
                                 </div>
                            
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Account Type</label>
                                       <select class="form-control @error('role') is-invalid @enderror" value="{{ old('role') }}" name="role">
                                           <option value="" selected="true" disabled="disabled">&larr; Select Role &rarr;</option>
                                          <option value="admin">Admin</option>
                                          <option value="user">User</option>
                                       </select>
                                       @error('role')
                                       <span class="" style="color:#dc3545">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                      @enderror
                                    </div>

                                 </div>
                                 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Password</label>
                                       <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}"  placeholder="**********">
                                       @error('password')
                                       <span class="" style="color:#dc3545">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                      @enderror
                                    </div>
                                  
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                     <!-- /.card-body -->

                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                     </div>
                  </form>
               </div>
            </div>
            <!-- /.container-fluid -->
         </section>
         <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   @endsection