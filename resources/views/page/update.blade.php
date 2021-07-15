@extends('layouts.app')

@section('content')

@push('admin')
<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
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


                <section class="py-lg-7">
                    <div class="container ">
                        <div class="row ">
                            <div class="col">
                                <div class="card overflow-hidden mb-5 shadow">


                                    <form action="{{ url('admin/'.$movie->id) }}" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="row">
                                            {{-- @csrf --}}
                                            {{ csrf_field() }}

                                            <div class="col-lg-5 p-5">
                                                <div class="">
                                                    <input name="image" type="file" class="dropify form-control" data-allowed-file-extensions="jpg jpeg png" />
                                                </div>
                                            </div>
                                            <div class="col-lg-7 p-5">

                                                <div class=" px-4 py-sm-2">
                                                    <h2>Add Movies </h2>
                                                    <p class="lead"> We'd like to talk with you.</p>
                                                </div>
                                                <div class="card-body pt-1">
                                                    <div class="row">
                                                        <div class="col-md-12 pe-2 mb-3">
                                                            <label>Title</label>
                                                            <input name="titre" class="form-control"
                                                                placeholder="Full Name" type="text"
                                                                value="{{ $movie->titre }}">
                                                        </div>
                                                        <div class="col-md-12 pe-2 mb-3">
                                                            <label>Date sort</label>
                                                            <input name="dateSort" class="form-control"
                                                                placeholder="What you love" type="date"
                                                                value="{{ $movie->dateSort }}">
                                                        </div>

                                                        {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                        --}}
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12 text-right ms-auto">
                                                            <a href="{{ url('/admin') }}" type="submit" class="btn btn-rounded bg-success text-white mb-0">Cancel</a>
                                                            <button type="submit" class="btn btn-rounded bg-warning text-white mb-0">Update</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                </section>



            </div>
        </div>
    </div>
</div>
</div>
@endsection
