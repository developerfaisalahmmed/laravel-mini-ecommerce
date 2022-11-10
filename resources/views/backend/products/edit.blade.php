@extends('layouts.app')


@push('css')
@endpush


@section('title', 'Edit Products')




@section('content')

    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Products </h6>
        <a class="btn btn-success" href="{{route('products.index')}}"> ALl Products </a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">

            <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{$product->title}}">
                            <div
                                style='color:red; padding: 0 5px;'>{{($errors->has('title'))?($errors->first('title')):''}}</div>
                        </div>

                        <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input name="quantity" type="number" class="form-control" id="quantity" value="{{$product->quantity}}">
                            <div
                                style='color:red; padding: 0 5px;'>{{($errors->has('quantity'))?($errors->first('quantity')):''}}</div>
                        </div>

                        <div class="mb-3">
                            <label for="price"> Price: </label>
                            <input type="number" name="price" class="form-control"  id="price" value="{{$product->price}}">
                            <div
                                style='color:red; padding: 0 5px;'>{{($errors->has('price'))?($errors->first('price')):''}}</div>
                        </div>

                        <div class="mb-3">
                            <label for="discount_type"> Discount Type </label>
                            <select class="form-control" name="discount_type" id="discount_type">
                                <option @if($product->discount_type == 1) selected @endif value="1"> Amount</option>
                                <option @if($product->discount_type == 2) selected @endif value="2"> Percentage</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="discount"> Discount: </label>
                            <input type="number" name="discount" class="form-control" id="discount" value="{{$product->discount}}" min="0" >
                            <div
                                style='color:red; padding: 0 5px;'>{{($errors->has('discount'))?($errors->first('discount')):''}}</div>
                        </div>
                        <div class="mb-3">
                            <label for="selling_price"> Discount Price: </label>
                            <input readonly type="number" name="selling_price" class="form-control"  id="selling_price" value="{{$product->selling_price}}">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('selling_price'))?($errors->first('selling_price')):''}}</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Categories</label>
                            <select class="form-control myselect2" name="category_id[]" multiple="multiple" id="category">
{{--                            <select class="form-control" name="category_id">--}}
                                @foreach($categories as $category)
{{--                                <option @if($product->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>--}}
                                <option @if($product->category_id == $category->id ? 'selected':'') selected @endif value="{{$category->id}}"> {{$category->name}}</option>
                                @endforeach
                            </select>
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('category'))?($errors->first('category')):''}}</div>

                            @foreach($product->categories ?? 'null' as $category)
                                <a href="{{route('product.category.edit',$category->pivot->category_id)}}"  class="btn btn-success btn-sm btn-group"> {{$category->name ?? 'Null'}} </a>
                            @endforeach

                        </div>

                        <div class="mb-3">
                            <label for="defaultImage"> Image </label>
                            <div class="input-group control-group increment" >
                                <input type="file" name="image[]" class="form-control" id="defaultImage">
                                <div class="input-group-btn p-1">
                                    <button class="btn btn-sm btn-success add-new-row" type="button"> <i class="fadeIn animated bx bx-plus-circle"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                    <input type="file" name="image[]" class="form-control" id="defaultImage1">
                                    <div class="input-group-btn p-1">
                                        <button class="btn btn-sm btn-danger " type="button"> <i class="fadeIn animated bx bx-minus-circle"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>

                        <div class="row">
                                @foreach($product->productImages ?? 'null' as $image)
                                <div class="col-md-2">
                                    <div class="card">
                                            <a href="{{route('product.image.edit',$image->id)}}" class="" ><i class="lni lni-cross-circle"></i>
                                                <img src="{{asset($image->image) ?? 'Null'}}" class="card-img-top" height="70px">
                                            </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" class="form-control summernote" id="description"> {{$product->description}}  </textarea>
                            <div
                                style='color:red; padding: 0 5px;'>{{($errors->has('description'))?($errors->first('description')):''}}</div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>

@endsection



@push('js')

    <script>

        $(document).ready(function() {
            $(".add-new-row").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });
            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });
        });


        function offer() {
            var price = $('#price').val();
            var discount_type = $('#discount_type').val();
            var discount = $('#discount').val();

            if (discount_type == 1) {
                var selling_price = price - discount;
            } else if (discount_type == 2) {
                var price_cal = ((price * discount) / 100);
                var selling_price = price - price_cal;
            } else {
                var selling_price = 0;
            }
            if (!isNaN(selling_price)) {
                $('#selling_price').val(selling_price);
            }
        }

        $('#price, #discount_type, #discount, #selling_price').on('keyup change', function () {
            offer();
        });
    </script>

@endpush
