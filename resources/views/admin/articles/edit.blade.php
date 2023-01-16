
@extends('layouts.master')

@section('title', 'Ubah Artikel')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Artikel</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Artikel</a></li>
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
        
                                        <h4 class="mt-0 header-title">Ubah Artikel</h4>
                                    
                                        <form action="{{ route('admin.articles.update',['article' => $article->id]) }}" method="POST" class='mt-3' enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Judul</label>
                                                <div class="col-md-10">
                                                    <input type="text" name="title" class='form-control @error('title') is-invalid @enderror' value="{{$article->title}}">
                                                    @error('title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Konten</label>
                                                <div class="col-md-10">
                                                    <textarea name="content" id="" rows="5" class="form-control  @error('content') is-invalid @enderror">{{$article->content}}</textarea>
                                                    @error('content')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="" class='col-md-2 col-form-label'>Thumbnail</label>
                                                <div class="col-md-10">
                                                    <input type="file" class="form-control-file" name='thumbnail'>
                                                    @error('thumbnail')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <img src="{{ Storage::url('images/articles/'.$article->thumbnail_image_name) }}" alt="current image" srcset="">
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
