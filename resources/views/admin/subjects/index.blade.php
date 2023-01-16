
@extends('layouts.master')

@section('css')
        <!-- Plugins css -->
        <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('title', 'Mata Pelajaran')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Mata Pelajaran</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Mata Pelajaran</a></li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Seluruh Mata Pelajaran</h4>
                                        <p class="text-muted m-b-30 font-14">Berikut adalah daftar seluruh mata pelajaran</p>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <form action="" class="form-inline">
                                                    <input type="text" class="form-control mr-2" placeholder="Cari Data" name='search'>
                                                    <button type="submit" class='btn btn-primary'>Cari</button>
                                                </form>
                                            </div>
                                            <div class="col-md-2 ml-auto">
                                                <a class="btn btn-primary float-right" href="{{ route('admin.subjects.create') }}">Tambah</a>
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
                                                    <th>Nama</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($subjects as $subject)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td>{{ $subject->name }}</td>
                                                            <td>
                                                                <div class='d-inline-flex'>
                                                                    <a href="{{ route('admin.subjects.edit', ['subject' => $subject->id]) }}" class='btn btn-warning mr-2'><i class="bi bi-pencil-fill"></i></a>
                                                                    <form action="{{ route('admin.subjects.destroy', ['subject' => $subject->id]) }}" method="post">
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
                                            {{$subjects->links()}}
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