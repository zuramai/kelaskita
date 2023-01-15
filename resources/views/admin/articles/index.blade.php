<!-- =========================================================================================
  Name: KelasKita Website
  Author: Ahmad Saugi
  Author URL: http://ahmadsaugi.com
  Repository: https://github.com/zuramai/kelaskita
========================================================================================== -->
@extends('layouts.master')

@section('css')
        <!-- Plugins css -->
        <link href="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet">
@endsection
@section('title', 'Artikel')

@section('content')
            <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Artikel</h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Artikel</a></li>
                                    </ol>
            
                                  
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card m-b-20">
                                    <div class="card-body">
        
                                        <h4 class="mt-0 header-title">Seluruh Artikel</h4>
                                        <p class="text-muted m-b-30 font-14">Berikut adalah daftar seluruh artikel</p>
                                        
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <form action="" class="form-inline">
                                                    <input type="text" class="form-control mr-2" placeholder="Cari Data" name='search'>
                                                    <button type="submit" class='btn btn-primary'>Cari</button>
                                                </form>
                                            </div>
                                            <div class="col-md-2 ml-auto">
                                                <a class="btn btn-primary float-right" href="{{ route('admin.articles.create') }}">Tambah</a>
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
                                                    <th>Thumbnail</th>
                                                    <th>Judul</th>
                                                    <th>Konten</th>
                                                    <th>Tanggal</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($articles as $article)
                                                        <tr>
                                                            <th scope="row">{{ $article->id }}</th>
                                                            <td><img src="{{ Storage::url('images/articles/'.$article->thumbnail_image_name) }}" alt=""  style="width:50px"></td>
                                                            <td>{{ $article->title }}</td>
                                                            <td>{{substr($article->content,0,50)}}..</td>
                                                            <td>{{ Carbon\Carbon::parse($article->created_at)->format('d F Y H:i:s') }}</td>
                                                            <td>
                                                                <div class='d-inline-flex'>
                                                                    <a href="{{ route('admin.articles.edit', ['article' => $article->id]) }}" class='btn btn-warning mr-2'><i class="fas fa-edit"></i></a>
                                                                    <form action="{{ route('admin.articles.destroy', ['article' => $article->id]) }}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="button" class='btn btn-danger btn-delete'><i class="fas fa-trash"></i></button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="paginate float-right mt-3">
                                            {{$articles->links()}}
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