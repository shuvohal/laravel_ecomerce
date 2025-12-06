




@extends('backend.admin.master')

@section('content')

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"> </div>
             <div class="col-md-8">
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
                        Add Product
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/product/store') }}" method="POST" enctype="multipart/form-data">
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
                                <label>Brand</label>
                                <select class="form-control" name="brand_id" >
                                    <option selected disabled>-----Select a brand------</option>
                                    @foreach($brands as $brand)
                                     <option value="{{$brand->id}}"> {{$brand->name}} </option>
                                    @endforeach
                                   
                                 
                                </select>
                            </div>


                            <div class="from-group">
                                <label> Name</label>
                                <input type="text" name="name" value="{{ old('name')}}" class="form-control" placeholder="Enter Category Name">
                            </div>


                             <div class="from-group">
                                <label>Price</label>
                                <input type="text" name="price" value="{{ old('price')}}" class="form-control" placeholder="Enter product price">
                            </div>

                              <div class="from-group">
                                <label>Discount Price (optional)</label>
                                <input type="text" name="discount_Price" value="{{ old('discount_Price')}}" class="form-control" placeholder="Enter product discount Price">
                            </div>

                             <div class="from-group">
                                <label>Qty</label>
                                <input type="number" name="qty" value="{{ old('qty')}}" class="form-control" placeholder="Enter product qty">
                            </div>

                              <div class="from-group">
                                <label>Color</label>
                                <input type="text" name="color" value="{{ old('color')}}" class="form-control" placeholder="Enter product color">
                            </div>

                             <div class="from-group">
                                <label>Size</label>
                                <input type="text" name="size" value="{{ old('size')}}" class="form-control" placeholder="Enter product color size">
                            </div>

                             <div class="from-group">
                                <label>Short discription</label>
                                <textarea class="form-control" rows="5" name="short_discription" placeholder="short_discription">{{ old('short_discription')}}</textarea>
                                
                             
                            </div>

                            <div class="from-group">
                                <label>Long discription</label>
                                <textarea class="form-control"  name="long_discription" placeholder="long_discription" id="long_discription">{{ old('long_discription')}}</textarea>
                                
                             
                            </div>

                            <div class="from-group">
                                <label>Image</label>
                                <input type="file" name="image"  class="form-control" >
                            </div>

                             <div class="from-group">
                                <label>Gallery image</label>
                                <input type="file" name="images[]" multiple  class="form-control" >
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
              <div class="col-md-2"> </div>
        </div>
    </div>
</div>

   
<!-- /.container-fluid -->
@endsection