
@extends('backend.admin.master')
@section('content')
 <!-- DataTales Example -->
    <div class="container">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                    @foreach($categories as $category)
                                    <tr>
                                      <td>{{$loop->index+1}}</td>
                                      <td> {{$category->name}} </td> 
                                      <td>
                                        @if($category->status==1)
                                        <span class="badge bg-success">Active</span>
                                        @else
                                        <span class="badge bg-danger">Inactive</span>
                                        @endif
                                      </td>
                                      <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        @if($category->status==1)
                                        <a href="" class="btn btn-primary btn-sm">Active</a>
                                        @else

                                        <a href="" class="btn btn-warning btn-sm">Inactive</a>
                                        @endif
                                        
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
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
