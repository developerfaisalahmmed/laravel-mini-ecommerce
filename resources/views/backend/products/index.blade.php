@extends('backend.layouts.app')

@section('title', 'Products')

@push('css')

@endpush


@section('content')

    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Products </h6>
        <a class="btn btn-success" href="{{route('products.create')}}"> New Products </a>
    </div>
    <hr/>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>Price</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Created Time</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $key => $product)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->selling_price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                @foreach($product->productImages ?? 'null' as $image)
                                    <img width="100px" height="31px" src="{{$image->image ?? 'Null'}}">
                                @endforeach
                            </td>
                            <td>
                                @foreach($product->categories ?? 'null' as $category)
                                    {{--                                <img width="100px" height="31px" src="{{$image->image ?? 'Null'}}">--}}
                                    <a class="btn btn-success btn-sm btn-group"> {{$category->name ?? 'Null'}} </a>

                                @endforeach

                            </td>
                            <td>{{$product->created_at->diffForHumans()}}</td>
                            <td>{{$product->updated_at->diffForHumans()}}</td>
                            <td class="d-flex">
                                @can('product-edit')

                                    <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm"><i
                                            class="lni lni-highlight-alt"></i></a>
                                @endcan
                                @can('product-show')
                                    <a target="_blank" href="{{route('product.details',$product->slug)}}"
                                       class="btn btn-sm"><i class="lni lni-eye"></i></a>
                                @endcan
                                @can('product-delete')

                                    <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm" type="submit"><i
                                                class="lni lni-cross-circle"></i></button>

                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>Price</th>
                        <th>Selling Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Categories</th>
                        <th>Created Time</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

@endsection



@push('js')



@endpush
