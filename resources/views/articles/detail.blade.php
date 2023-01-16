
@extends('layouts.app')

@section('content')
@section('title', $article->title)
@push('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

<section class="article">
    <div class="container">
        <div class="card">
            <img src="{{ Storage::url('images/articles/'.$article->thumbnail_image_name) }}" class='card-img-top'>
            <div class="card-body pt-4">
                <div class="card-detail">
                    <span><i class="fas fa-user-circle"></i> {{ $article->author->name }}</span> <span class='ml-10'>{{ Carbon\Carbon::parse($article->created_at)->format('d F Y H:i:s') }}</span>
                </div>
                <h1 class="card-title mt-2">{{ $article->title }}</h1>
                <p>{!! nl2br($article->content) !!}</p>
            </div>
        </div>
        <div class="thumbnail">
        </div>
        
    </div>
</section>

@endsection