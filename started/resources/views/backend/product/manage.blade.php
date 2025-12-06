







@extends('backend.admin.master')
@section('content')
 <!-- DataTales Example -->
    <div class="container">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Product List</h6>
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
                                            <th>Brand name</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                   
                                    <tbody>

                                    @foreach($products as $key=>$product)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ $product->brand->name }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->qty }}</td>
                                            <td>
                                                <img src="{{ asset('images/product/'.$product->image) }}" alt="" width="70px" height="70px">
                                            </td>
                                            <td>
                                                @if($product->status == 1)
                                                <span class="badge bg-success">Active</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('/product/edit/'.$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                @if($product->status == 1)
                                                <a href="{{ url('/product/inactive/'.$product->id) }}" class="btn btn-warning btn-sm">Inactive</a>
                                                @else
                                                <a href="{{ url('/product/active/'.$product->id) }}" class="btn btn-success btn-sm">Active</a>
                                                @endif
                                            
                                                <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this')">Delete</a>
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
