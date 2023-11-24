@extends('layouts.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6 animated bounceInRight">
                     <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-address-card"></span> Add Evacuees</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Evacuees</li>
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
                     <h3 class="card-title">Evacuees Information</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('admin.addevacueesinformation') }}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="Last Name">
                                    </div>
                                    @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="First Name">
                                    </div>
                                    @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Middle Name</label>
                                       <input type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" placeholder="Middle Name">
                                    </div>
                                    @error('middle_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Contacts</label>
                                       <input type="number" class="form-control @error('contacts') is-invalid @enderror" name="contacts" placeholder="ex. 09864723647">
                                    </div>
                                    @error('contacts')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Age</label>
                                       <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Age">
                                    </div>
                                    @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                          <option>Male</option>
                                          <option>Female</option>
                                       </select>
                                    </div>
                                    @error('gender')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label>Barangay</label>
                                       <select class="form-control @error('barangay') is-invalid @enderror" name="barangay">
                                          <option selected>&larr; Select Barangay &rarr;</option>
                                          @foreach ($bgryInfo as $row )
                                              <option value="{{ $row->barangay_name }}">{{ $row->barangay_name }}</option> 
                                          @endforeach
                                          
                                       </select>
                                    </div>
                                    @error('barangay')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Address</label>
                                       <textarea class="form-control @error('address') is-invalid @enderror" name="address"></textarea>
                                    </div>
                                    @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Head of Family</label>
                                       <input type="text" class="form-control @error('head_of_family') is-invalid @enderror" name="head_of_family" placeholder="Head of Family">
                                    </div>
                                    @error('head_of_family')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Evacuation Center</label>
                                       <select class="form-control @error('evacuation_center') is-invalid @enderror" name="evacuation_center">
                                          <option selected>&larr; Select Evacuation center &rarr;</option>
                                          @foreach ($evaCenter as $row )
                                              <option value="{{ $row->center_name }}">{{ $row->center_name }}</option> 
                                          @endforeach
                                          
                                       </select>
                                    </div>
                                    @error('evacuation_center')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-1">
                              <div class="form-group">
                                 <button type="submit" class="btn btn-primary w-100">Save</button>
                              </div>
                           </div>
                        </div>

                     </div>
                     <!-- /.card-body -->
              
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