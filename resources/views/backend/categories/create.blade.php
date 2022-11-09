@extends('layouts.app')


@push('css')
@endpush


@section('title', 'Create New Category')




@section('content')

    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Categories </h6>
        <a class="btn btn-success" href="{{route('categories.index')}}"> ALl Category </a>
    </div>
    <hr/>
    <div class="card">
        <div class="card-body">

            <form action="{{route('categories.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control" id="image">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>

                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>

@endsection



@push('js')



@endpush
