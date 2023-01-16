
@extends('layouts.master')

@section('css')
        <!-- Plugins css -->
        <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('title', 'Jadwal Piket')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Jadwal Piket</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Jadwal Piket</a></li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Seluruh Jadwal Piket</h4>
                                        <p class="text-muted m-b-30 font-14">Berikut adalah daftar seluruh mata Piket</p>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-5">
                                                <form action="" class="form-inline">
                                                    <select name="day" id="" class="form-control mr-2">
                                                        <option value="">Pilih hari..</option>
                                                        @foreach($days as $day)
                                                        <option value="{{$day->id}}">{{ $day->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="text" class="form-control mr-2" placeholder="Cari nama siswa" name='search'>
                                                    <button type="submit" class='btn btn-primary'>Cari</button>
                                                </form>
                                            </div>
                                            <div class="col-md-2 ml-auto">
                                                <a class="btn btn-primary float-right" href="{{ route('admin.pickets.create') }}">Tambah</a>
                                            </div>
                                        </div>
                                        @if(session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Hari</th>
                                                    <th>Nama Siswa</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($pickets as $picket)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $picket->day->name }}</td>
                                                            <td>{{ $picket->student->name }}</td>
                                                            <td>
                                                                <div class='d-inline-flex'>
                                                                    <a href="{{ route('admin.pickets.edit', ['picket' => $picket->id]) }}" class='btn btn-warning mr-2'><i class="bi bi-pencil-fill"></i></a>
                                                                    <form action="{{ route('admin.pickets.destroy', ['picket' => $picket->id]) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="button" class='btn btn-danger btn-delete'><i class="bi bi-trash"></i></button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="paginate float-right mt-3">
                                            {{$pickets->links()}}
                                        </div>
                                    </div>
                                </div>
        
                            </div> <!-- end col -->
        
                        </div> <!-- end row -->        

                    </div> <!-- container-fluid -->
@endsection

@section('script')
        <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js')}}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
@endsection