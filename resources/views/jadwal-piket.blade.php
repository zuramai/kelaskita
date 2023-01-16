
 @extends('layouts.app')

@section('content')
@section('title', 'Jadwal Piket')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

<section class="students">
    <div class="container">
        <div class="section-header text-center">
            <h1>Jadwal Piket</h1>
            <div class="divider mx-auto"></div>
        </div>
        <div class="section-body">
            @foreach($days as $day)
            <div class="card mb-5">
                <div class="card-header">
                    <h3>{{ $day->name }}</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($day->pickets as $picket)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $picket->student->name }}</td>
                                </tr>
                                @endforeach
                                @forelse ($day->pickets as $picket)
                                @empty
                                <tr>
                                    <td colspan="3" class='text-center'>No Data</td>    
                                </tr>                                    
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection