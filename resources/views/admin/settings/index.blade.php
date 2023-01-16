
@extends('layouts.master')

@section('title', 'Setting')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Settings</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title mb-3"> Settings</h4>
                                         @if(session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                        <form action="{{ route('admin.settings.update') }}" method="POST"  enctype="multipart/form-data" >
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Judul Website</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="WEB_TITLE" class='form-control  @error('WEB_TITLE') is-invalid @enderror' value="{{ config('web_config')['WEB_TITLE'] }}">
                                                    @error('WEB_TITLE')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Logo Website</label>
                                                <div class="col-md-10">
                                                    <input type="file" name="WEB_LOGO" class='form-control-file  @error('WEB_LOGO') is-invalid @enderror'>
                                                    @error('WEB_LOGO')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <img src="{{ Storage::url('/images/logo/'.config('web_config')['WEB_LOGO']) }}" alt="logo" height="50" class='mt-4'>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Favicon Website</label>
                                                <div class="col-md-10">
                                                    <input type="file" name="WEB_FAVICON" class='form-control-file  @error('WEB_FAVICON') is-invalid @enderror'>
                                                    @error('WEB_FAVICON')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <img src="{{ Storage::url('/images/logo/'.config('web_config')['WEB_FAVICON']) }}" alt="favicon" width="50"  class='mt-4'>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Logo Website (Light)</label>
                                                <div class="col-md-10">
                                                    <input type="file" name="WEB_LOGO_WHITE" class='form-control-file  @error('WEB_LOGO_WHITE') is-invalid @enderror'>
                                                    @error('WEB_LOGO_WHITE')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <img src="{{ Storage::url('/images/logo/'.config('web_config')['WEB_LOGO_WHITE']) }}" alt="logo" height="50" class='mt-4'>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Hero Text Title</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="HERO_TEXT_HEADER" class='form-control  @error('HERO_TEXT_HEADER') is-invalid @enderror' value="{{ config('web_config')['HERO_TEXT_HEADER'] }}">
                                                    @error('HERO_TEXT_HEADER')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Hero Text Description</label>
                                                <div class="col-md-10">
                                                    <textarea name="HERO_TEXT_DESCRIPTION" id="" rows="3" class="form-control">{{ config('web_config')['HERO_TEXT_DESCRIPTION'] }}</textarea>
                                                    @error('HERO_TEXT_DESCRIPTION')
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
