<!-- =========================================================================================
  Name: KelasKita Website
  Author: Ahmad Saugi
  Author URL: http://ahmadsaugi.com
  Repository: https://github.com/zuramai/kelaskita
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
@extends('layouts.app')

@section('content')
@section('title', 'Siswa')
@push('styles')
    <style>.navbar {background-color: #fff} .nav-link {color: #777 !important} .nav-link:hover {color: #6814E1 !important}</style>
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