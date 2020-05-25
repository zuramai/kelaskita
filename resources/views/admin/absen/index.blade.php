<!-- =========================================================================================
  Name: KelasKita Website
  Author: Ahmad Saugi
  Author URL: http://ahmadsaugi.com
  Repository: https://github.com/zuramai/kelaskita
  Community: Devover ID
  Community URL : http://devover.id
========================================================================================== -->
@extends('layouts.master')

@section('css')
        <!-- Plugins css -->
        <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('title', 'Siswa')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Siswa</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Siswa</a></li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Seluruh Siswa</h4>
                                        <p class="text-muted m-b-30 font-14">Berikut adalah daftar seluruh siswa</p>
                                        @if(session('sudahAda'))
                                            <div class="alert alert-danger">{{ session('sudahAda') }}</div>
                                        @endif
                                        @if (session('tidakSakit'))
                                            <div class="alert alert-success">{{ session('tidakSakit') }}</div>
                                        @endif
                                        @if (session('tidakIzin'))
                                            <div class="alert alert-success">{{ session('tidakIzin') }}</div>
                                        @endif
                                        @if (session('tidakHadir'))
                                            <div class="alert alert-danger">{{ session('tidakHadir') }}</div>
                                         @endif
                                        @if (session('tidakAlfa'))
                                            <div class="alert alert-success">{{ session('tidakAlfa') }}</div>
                                        @endif

                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Gambar</th>
                                                    <th>Nama</th>
                                                    <th colspan="5" class="text-center">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($students as $student)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td><img src="{{ Storage::url('images/students/'.$student->image_name) }}" alt="" srcset="" style="width:50px"></td>
                                                            <td>{{ $student->name }}</td>
                                                            <td>
                                                                <form action="{{route('admin.absen.store')}}" method="post">
                                                                    @csrf
                                                            </td>
                                                            <td>    
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <label for="">Hadir</label>
                                                                            <input type="checkbox" name="hadir[]" value="{{$student->id}}">
                                                                        </div>  
                                                                        
                                                                        <div class="col-md-3">
                                                                            <label for="">Sakit</label>
                                                                            <input type="checkbox" name="sakit[]" value="{{$student->id}}">
                                                                        </div>  

                                                                        <div class="col-md-3">
                                                                            <label for="">Izin</label>
                                                                            <input type="checkbox" name="izin[]" value="{{$student->id}}">
                                                                        </div> 
                                                                        
                                                                        <div class="col-md-3">
                                                                            <label for="">Alfa</label>
                                                                            <input type="checkbox" name="alfa[]" value="{{$student->id}}">
                                                                        </div> 

                                                                    </div>    
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td>
                                                                <button type="submit" class='btn btn-primary'>Absen</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="paginate float-right mt-3">
                                            {{$students->links()}}
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