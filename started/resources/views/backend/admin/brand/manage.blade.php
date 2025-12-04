


@extends('backend.admin.master')
@section('content')
 <!-- DataTales Example -->
    <div class="container">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Brand List</h6>
                        </div>
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session()->get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>category name</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                    @foreach($brands as $brand)
                                    <tr>
                                      <td>{{$loop->index+1}}</td>
                                      <td>category name</td>
                                      <td> {{$brand->name}} </td> 
                                      <td>
                                        @if($brand->status==1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                      </td>
                                      <td>
                                        <a href="{{ url('/brand/edit/'.$brand->id)}} " class="btn btn-primary btn-sm">Edit</a>
                                        @if($brand->status==1)
                                        <a href="{{ url('/brand/active/'.$brand->id)}}" class="btn btn-primary btn-sm">Active</a>
                                        @else

                                        <a href="{{ url('/brand/inactive/'.$brand->id)}}" class="btn btn-warning btn-sm">Inactive</a>
                                        @endif
                                        
                                        <a href="{{ url('/brand/delete/'.$brand->id)}}" onclick="return confirm('Are you sure delete this info ?')" class="btn btn-danger btn-sm">Delete</a>
                                      </td>
                                    
                                    </tr>
                                       
                                    @endforeach
                                
                                          
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            

            <!-- End of Main Content -->
@endsection
