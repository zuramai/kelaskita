
@extends('layouts.app')

@section('content')
@section('title', 'Siswa')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

<section class="student">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ Storage::url('images/students/'.$student->image_name) }}" alt="">
            </div>
            <div class="col-md-9 sm:mt-5">
                <h1 class='mb-3'>{{ $student->name }}</h1>
                <p>{!! nl2br($student->description) !!}</p>
            </div>
        </div>
    </div>
</section>

@endsection