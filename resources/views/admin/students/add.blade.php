
@extends('layouts.master')

@section('title', 'Tambah Siswa')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Siswa</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Siswa</a></li>
                                        <li class="breadcrumb-item">Tambah</li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Tambah Siswa</h4>
                                    
                                        <form action="{{ route('admin.students.store') }}" method="POST" class='mt-3' enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Nama</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="name" class='form-control @error('name') is-invalid @enderror'>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Deskripsi</label>
                                                <div class="col-md-10">
                                                    <textarea name="description" id="" rows="5" class="form-control  @error('name') is-invalid @enderror"></textarea>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Gambar</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control-file" name='photo'>
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <button type="submit" class='btn btn-primary float-right'>Submit</button>
                                        </form>
        
                                    </div>
                                </div>
        
                            </div> <!-- end col -->
        
                        </div> <!-- end row -->        

                    </div> <!-- container-fluid -->
@endsection
