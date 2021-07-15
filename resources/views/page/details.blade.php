@extends('layouts.app')

@section('content')

@push('details')
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">
@endpush
@push('comment')
    <link href="{{ asset('css/comment.css') }}" rel="stylesheet">
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
                    
                    <div class="container">
                                    <div class="card mx-auto mb-3">
                                        
                                        <div class="path"><a href="{{ url('/') }}">HOME</a> / {{ $movie->titre }}  </div>
                                        <div class="row">
                                            <div class="col-md-6 text-center align-self-center"> <img src="{{ asset('image/'.$movie->image)}}" height="300px"> </div>
                                            <div class="col-md-6 info">
                                                <div class="row title">
                                                    <div class="col">
                                                        <h2>{{ $movie->titre }}</h2>
                                                    </div>
                                                    <div class="col text-right"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                </div>
                                                <p>Date Sort : {{ $movie->dateSort }}</p> 
                                                
                                            </div>
                                        </div>
                                    </div>


                            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey ">
<div class="col-md-12 bootstrap snippets">
<div class="panel bg-white">
  <div class="panel-body">
    <form action="{{ route('comment') }}" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{$movie->id}}">
        <textarea name="comment" class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
    <div class="mar-top clearfix">
      <button class="btn btn-sm btn-primary pull-right" type="submit"><i class="fa fa-pencil fa-fw"></i> Share</button>
      <a class="btn btn-trans btn-icon fa fa-video-camera add-tooltip" href="#"></a>
      <a class="btn btn-trans btn-icon fa fa-camera add-tooltip" href="#"></a>
      <a class="btn btn-trans btn-icon fa fa-file add-tooltip" href="#"></a>
    </div>
    </form>
  </div>
</div>
<div class="panel bg-white">
    <div class="panel-body">
    <!-- Newsfeed Content -->
    <!--===================================================-->
    
        @foreach ($movie->comments()->sortDesc() as $com)
        <div class="media-block">
            <a class="media-left" href="#"><img class="img-circle rounded-circle mr-2 img-sm" alt="Profile Picture" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
            <div class="media-body">
              <div class="mar-btm position-relative">
                <a href="#" class="btn-link text-semibold media-heading box-inline">{{$com->user()->name}}</a>
                <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - {{$com->created_at}}</p>
                <form action="{{ url('user/'.$com->id) }}" method="post" class="position-absolute" style="right: 0;top: 0%;}">
                    {{ csrf_field() }}
                    {{ method_field("DELETE") }}
                    
                    <input type="hidden" name="post_id" value="{{$movie->id}}">
  
                    <button type="submit" class="btn btn-sm btn-default btn-hover-danger text-danger" >delete</button>
                </form>
              </div>
              <p>{{$com->comment}}</p>
              <div class="pad-ver">
                <div class="btn-group">
                  <a class="btn btn-sm btn-default btn-hover-success" href="#"><i class="fa fa-thumbs-up"></i></a>
                  <a class="btn btn-sm btn-default btn-hover-danger" href="#"><i class="fa fa-thumbs-down"></i></a>
                </div>
                <a class="btn btn-sm btn-default btn-hover-primary" href="#">Comment</a>
              </div>
              <hr>
      
      
            </div>
        </div>
            
        @endforeach

    <!--===================================================-->
    <!-- End Newsfeed Content -->
    

  </div>
</div>
</div>
</div>
                                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
