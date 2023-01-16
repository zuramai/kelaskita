
@extends('layouts.app')

@section('content')
@section('title', 'Artikel')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

<section class="students">
    <div class="container">
        <div class="section-header">
            <h1>Daftar Artikel</h1>
            <div class="divider"></div>
        </div>
        <div class="section-body">
            <div class="row">
                @foreach($articles as $article)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ Storage::url('images/articles/'.$article->thumbnail_image_name) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title"><a href="{{route('article.show', ['id' => $article->id])}} ">{{ $article->title }}</a></h3>
                            <p class="card-description">{{ substr($article->content, 0, 110) }}. <a href="#">Lihat selengkapnya</a></p>
                        </div>
                        <div class="card-footer">
                            <div class="card-author">
                                <i class="fas fa-user-circle"></i> <span>{{$article->author->name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="paginate float-right mt-2">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</section>

@endsection