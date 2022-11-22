@extends('frontend.layouts.app')



@push('css')


@endpush


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-3">
                            <div class="nav flex-column nav-pills card" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a href="{{route('profile')}}" class="nav-link {{request()->route()->named('profile')? 'active': ''}}">Home</a>
                                <a href="" class="nav-link" >Profile</a>
                                <a href="" class="nav-link" >Messages</a>
                                <a href="" class="nav-link" >Settings</a>
                                <a  href="{{route('order.history')}}" class="nav-link {{request()->route()->named('order.history')? 'active': ''}}">Order History</a>
                            </div>
                        </div>
                        <div class="col-9">
                            @yield('user-content')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection



@push('js')


@endpush
