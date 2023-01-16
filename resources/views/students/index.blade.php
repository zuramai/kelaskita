

@extends('layouts.app')

@section('content')
@section('title', 'Siswa')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

<section class="students">
    <div class="container">
        <div class="section-header">
            <h1>Daftar Siswa</h1>
            <div class="divider"></div>
        </div>
        <div class="section-body">
            <div class="row">
                @foreach($students as $student)
                <div class="col-md-6 mb-3">
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
        </div>
    </div>
</section>

@endsection