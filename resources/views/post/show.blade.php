@extends ('layout.index')

@section('title', '-'. $post->title)

@include('partials.nav')
@section('header')

<header class="intro-header" style="background-image: url('/storage/{{ $post->image }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$post->title}}t</h1>
                        <h2 class="subheading">{{$post->sub_title}}</h2>
                        <span class="meta">Posted by <a href="#">{{$post->author->name}}</a> {{$post->created_at->format('F d,Y')}}</span>
                    </div>
                </div>
            </div>
        </div> 
    </header>

@endsection


@section ('content')


 <article>
        <div class="container">
            <div class="row">
                <div class= col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $post-> body !!}
                </div>
            </div>
        </div>
    </article>
    <hr>

@stop



    

    
   
    
    

    

   