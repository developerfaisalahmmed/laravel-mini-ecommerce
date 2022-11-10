@extends('layouts.app')

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
                        <th>Categories</th>
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
                            @foreach(json_decode($product->image) ?? 'null' as $image)
                                <img width="100px" height="31px" src="{{$image ?? 'Null'}}">
                            @endforeach
                        </td>
                        <td>
                            @foreach($product->products_category ?? 'null' as $category)
                                <a class="btn btn-success btn-sm btn-group">{{$category->name ?? 'Null'}}</a>
                            @endforeach
                        </td>
                        <td>{{$product->created_at->diffForHumans()}}</td>
                        <td>{{$product->updated_at->diffForHumans()}}</td>
                        <td class="d-flex">
                            <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm" ><i class="lni lni-highlight-alt"></i></a>
                             <a href="" class="btn btn-sm" ><i class="lni lni-eye"></i></a>
                            <form action="{{route('products.destroy',$product->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm" type="submit"><i class="lni lni-cross-circle"></i></button>

                            </form>
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
