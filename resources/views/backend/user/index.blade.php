@extends('backend.layouts.app')

@section('title')
    Users
@endsection



@push('css')

@endpush

@section('content')


    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Users </h6>
        <a class="btn btn-info" href="{{route('users.create')}}"> New User </a>
    </div>

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role Names</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->getRoleNames() ?? ''}}</td>
                            <td class="d-flex">
                                @can('user-list')
                                    <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm"><i
                                            class="lni lni-highlight-alt"></i></a>
                                @endcan
                                @can('user-edit')
                                    <a href="{{ route('users.show',$user->id) }}" class="btn btn-sm"><i
                                            class="lni lni-eye"></i></a>
                                @endcan
                                @can('user-delete')
                                    <form method="POST"
                                          action="{{route('users.destroy',$user->id)}}"
                                          onsubmit="return confirm('Are you sure ?')">
                                        @csrf
                                        @method('DELETE')
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm" type="submit"><i class="lni lni-cross-circle"></i>
                                        </button>

                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
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
