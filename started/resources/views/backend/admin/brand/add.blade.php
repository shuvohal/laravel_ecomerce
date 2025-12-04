


@extends('backend.admin.master')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"> </div>
             <div class="col-md-6">
                @if (session()->has('success'))
                <div class="alert alert-sucess alert-dismissible fade show" role="alert">
             <strong>Sucess!</strong> {{ session()->get('success') }}
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
             @endif
             @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                     @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Add Brand
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/brand/store') }}" method="POST">
                            @csrf
                             <div class="from-group">
                                <label>category</label>
                                <select class="form-control" name="category_id" >
                                    <option selected disabled>-----Select a category------</option>
                                    @foreach($categories as $category)
                                     <option value="{{$category->id}}"> {{$category->name}} </option>
                                    @endforeach
                                   
                                 
                                </select>
                            </div>
                            <div class="from-group">
                                <label> Name</label>
                                <input type="text" name="name" value="{{ old('name')}}" class="form-control" placeholder="Enter Category Name">
                            </div>

                             <div class="from-group">
                                <label>publication status</label>
                                <select class="form-control" name="status" >
                                    <option selected disabled>-----Select publication status------</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-3">Submit</button>
                        </form>
                          
                    </div>
                </div>
             </div>
              <div class="col-md-3"> </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection