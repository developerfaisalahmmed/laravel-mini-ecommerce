@extends('layouts.app')


@push('css')
@endpush


@section('title', 'Categories')




@section('content')


<div class="d-flex justify-content-between">
    <h6 class="mb-0 text-uppercase"> Categories </h6>
   <a class="btn btn-success" href="{{route('categories.create')}}"> New Category </a>
</div>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Created Time</th>
                        <th>Update Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$category->name}}</td>
                        <td> <img width="100px" height="31px" src="{{asset($category->image) ?? 'Null'}}"> </td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                        <td class="d-flex">
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm" ><i class="lni lni-highlight-alt"></i></a>
{{--                            <a href="" class="btn btn-sm" ><i class="lni lni-eye"></i></a>--}}
                            <form action="{{route('categories.destroy',$category->id)}}" method="POST">
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
                        <th>Name</th>
                        <th>Image</th>
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
