@extends('layouts.main')
@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <!-- Content Header (Page header) -->
         <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6 animated bounceInRight">
                     <h1 class="m-0" style="color: rgb(31,108,163);"><span class="fa fa-landmark"></span> LGU Settings</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">LGU Settings</li>
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
                     <h3 class="card-title">LGU Information</h3>
                  </div>
                  <!-- /.card-header -->
                  @if(session()->has('mgs_lgu'))
                  <div class="alert alert-success">
                     {{ session()->get('mgs_lgu') }}
                  </div>
                 @endif
                  <!-- form start -->
                  <form action="{{ route('admin.addlgu') }}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>City</label>
                                       <input type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" placeholder="ex. Pasig">
                                       @error('city')
                                       <span class="" style="color:#dc3545">
                                           <strong>{{ $message }}</strong>
                                       </span>
                                      @enderror
                                    </div>
                                
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Contact Info</label>
                                       <input type="text" class="form-control @error('contact_info') is-invalid @enderror" name="contact_info" value="{{ old('contact_info') }}" placeholder="ex. 09090898574">
                                    </div>
                                    @error('contact_info')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                 </div>
                                 <div class="col-md-4">
                                    <div class="form-group">
                                       <label>Email Address</label>
                                       <input type="text" class="form-control @error('email_address') is-invalid @enderror" name="email_address" value="{{ old('email_address') }}" placeholder="ex. email.@gmail.com">
                                    </div>
                                    @error('email_address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Website</label>
                                       <input type="text" class="form-control @error('website') is-invalid @enderror" name="website" value="{{ old('website') }}" placeholder="https://website.com/websitename">
                                    </div>
                                    @error('website')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Facebook Page</label>
                                       <input type="text" class="form-control @error('facebook_page') is-invalid @enderror" name="facebook_page" value="{{ old('facebook_page') }}" placeholder="https://facebook.com/fbpagename">
                                    </div>
                                    @error('facebook_page')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
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
   @endsection