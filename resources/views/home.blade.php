

@extends('layouts.app')

@section('content')
@section('logo', Storage::url('/images/logo/'.config('web_config')['WEB_LOGO_WHITE']))
@push('styles')
    <link rel="stylesheet" href="{{asset('css/front.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/icons.css')}}">
@endpush
<section class="hero" style="background-image: linear-gradient(to right, rgba(74, 0, 224, .9), rgba(142, 45, 226,.9)),url({{Storage::url("images/front/".config('web_config')['HERO_BACKGROUND_IMAGE'])}})">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="hero-text text-center">
                    <div class="text-title">{{config('web_config')['HERO_TEXT_HEADER']}} {{config('web_config')['WEB_TITLE']}}</div>
                    <p>{{config('web_config')['HERO_TEXT_DESCRIPTION'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="students">
    <div class="container">
        <div class="section-header text-center">
            <h1>Daftar Siswa</h1>
            <div class="divider mx-auto"></div>
        </div>
        <div class="section-body">
            <div class="row">
                @foreach($students as $student)
                <div class="col-md-6 mb-5">
                    <a href="{{route('student.show', ['id' => $student->id])}}" class='card-student'>
                        <div class="card">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ Storage::url('images/students/'.$student->image_name) }}" alt="{{$student->name }}">
                                </div>
                                <div class="col-8 py-3 px-3">
                                    <div class="student-name mb-2">{{$student->name}}</div>
                                    <p class='student-description'>{{substr($student->description,0,125)}}.. <span class='text-blue'>Selengkapnya</span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class='text-right mt-5'>
                <a href="{{ route('student.index') }}" >Lihat Selengkapnya <i class='bi bi-chevron-right'></i></a>
            </div>
        </div>
    </div>
</section>
<section class="articles">
    <div class="container">
        <div class="section-header text-center">
            <h1>Artikel</h1>
            <div class="divider mx-auto"></div>
        </div>
        <div class="section-body">
            <div class="row">
                @foreach($articles as $article)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{ Storage::url('images/articles/'.$article->thumbnail_image_name) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h3 class="card-title"><a href="{{route('article.show', ['id' => $article->id])}}">{{ $article->title }}</a></h3>
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
            <div class='text-right mt-3'>
                <a href="{{ route('article.index') }}">Lihat Semua Artikel <i class="bi bi-chevron-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')

@endpush
