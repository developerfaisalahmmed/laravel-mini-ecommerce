@extends('frontend.layouts.app')



@push('css')


@endpush


@section('content')

    <section>
        <form action="{{route('checkout.shipping')}}" method="POST">
            @csrf
            <div class="container">
                <div class="row py-2">
                    <div class="col-md-8 card py-3">
                        <h4 class="py-3"><strong>Please Enter Shopping Address And Select Payment Gateway </strong></h4>

                        <div class="">
                            <label for="name" class="form-label">Name</label>
                            <input  type="text" class="form-control btn-height" id="name" name="name"
                                   placeholder="Enter Name" required value="{{$shipping_address->name ?? ''}}">
                            @if ($errors->has('name'))

                                <span class="text-danger">{{ $errors->first('name') }}</span>

                            @endif
                        </div>
                        <div class="">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control btn-height" id="email" name="email"
                                   placeholder="Enter Email" required value="{{$shipping_address->email ?? ''}}">
                            @if ($errors->has('email'))

                                <span class="text-danger">{{ $errors->first('email') }}</span>

                            @endif
                        </div>
                        <div class="">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control btn-height" id="phone" name="phone"
                                   placeholder="Enter Phone Number" required value="{{$shipping_address->phone ?? ''}}">
                            @if ($errors->has('phone'))

                                <span class="text-danger">{{ $errors->first('phone') }}</span>

                            @endif
                        </div>
                        <div class="">
                            <label for="shipping_address" class="form-label">Shipping Address</label>
                            <textarea name="shipping_address" id="shipping_address"
                                      required> {{$shipping_address->shipping_address ?? ''}}</textarea>
                            @if ($errors->has('shipping_address'))

                                <span class="text-danger">{{ $errors->first('shipping_address') }}</span>

                            @endif
                        </div>

                    </div>
                    <div class="col-md-4 card">
                        <h4 class="py-3"><strong>Select Payment Gateway</strong></h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" value="nagad"
                                           id="nagad">
                                    <label class="form-check-label" for="nagad">
                                        Nagad
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method" value="bkah"
                                           id="bkah">
                                    <label class="form-check-label" for="bkah">
                                        Bkah
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment_method"
                                           value="cash_on_delivery" id="cash_on_delivery" checked>
                                    <label class="form-check-label" for="cash_on_delivery">
                                        Cash on Delivery
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </section>

@endsection



@push('js')


@endpush
