@extends('layouts.app')
@section('content')
    @foreach ($videos as $video)
        <p> {{$video->title}}</p>
            {{-- <iframe src="{{ url('storage/app/videos'.$video->path) }}"  frameborder="0"></iframe> --}}
            <video controls   frameborder="0">
            <source src="{{ asset('vids/'.$video->path  ) }}">
            </video>
            
            <a href="{{route('videos.show', $video->id)}}">download</a>
    @endforeach

@endsection