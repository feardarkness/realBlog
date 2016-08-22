@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class="row">
            <div class="col-sm-6 col-md-12 col-lg-12">
                @foreach($posts as $post)
                    <div>{{$post->title}}</div>
                    <div>{{$post->body}}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection