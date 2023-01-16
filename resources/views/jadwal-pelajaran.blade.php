
 @extends('layouts.app')

@section('content')
@section('title', 'Siswa')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endpush

<section class="students">
    <div class="container">
        <div class="section-header text-center">
            <h1>Jadwal Pelajaran</h1>
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
                                    <th>Mata Pelajaran</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($day->schedules as $schedule)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $schedule->subject->name }}</td>
                                    <td>{{ date('H:i', strtotime($schedule->start_time)) }} - {{ date('H:i', strtotime($schedule->end_time)) }}</td>
                                </tr>
                                @endforeach
                                @forelse ($day->schedules as $schedule)
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