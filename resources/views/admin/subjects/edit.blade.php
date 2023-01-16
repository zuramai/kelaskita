
@extends('layouts.master')

@section('title', 'Ubah Mata Pelajaran')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Mata Pelajaran</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Mata Pelajaran</a></li>
                                        <li class="breadcrumb-item">Ubah</li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Ubah Mata Pelajaran</h4>
                                    
                                        <form action="{{ route('admin.subjects.update', ['subject' => $subject->id]) }}" method="POST" class='mt-3' enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Nama</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="name" class='form-control @error('name') is-invalid @enderror' value="{{ $subject->name }}">
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
