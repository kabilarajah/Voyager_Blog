@extends('layout.index')

@section('content')


<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                @foreach ($posts as $post)
                	@include('partials.post',['posts'=> $post])
                @endforeach

                {{ $posts->links() }}
   
@stop