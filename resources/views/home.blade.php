@extends('layouts.app')

@section('content')

@push('card')
    <link href="{{ asset('css/card.css') }}" rel="stylesheet">
@endpush

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}

                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container  d-flex justify-content-center mt-100">
                        <div class="row w-100">
                            
                            {{-- @foreach ($movies as $movie)
                                <div class="col-md-3">
                                    <div class="product-wrapper mb-45 text-center">
                                        <div class="product-img"> 
                                            <a href="#" data-abc="true"> <img src="{{ url('image/'.$movie->image) }}" style="width: 100%;" alt=""> </a>
                                            <span><i class="fa fa-rupee"></i> {{ $movie->dateSort }}</span>
                                            <div class="product-action">
                                                <div class="product-action-style"> 
                                                    <p class="mx-3 my-0">{{ $movie->titre }} </p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach --}}
                            
                            @foreach ($movies as $movie)
                                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                                    <div class="product-wrapper mb-45 text-center">
                                        <a href="{{ route('details',$movie->id) }}">
                                            <div class="product-img" style="background-image: url('{{ url('image/'.$movie->image) }}');width: 250px;
                                                height: 322px;
                                                background-size: cover;"> 
                                                {{-- <a href="#" data-abc="true"> <img src="" style="width: 100%;" alt=""> </a> --}}
                                                <span><i class="fa fa-rupee"></i> {{ $movie->dateSort }}</span>
                                                <div class="product-action">
                                                    <div class="product-action-style"> 
                                                        <p class="mx-3 my-0">{{ $movie->titre }} </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
