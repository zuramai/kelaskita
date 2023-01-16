

@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/morris/morris.css')}}">
@endsection
@section('title', 'Dashboard')
@section('content')
<div class="page-heading">
    <h3>Dashboard</h3>
    <p>Welcome to {{config('web_config')['WEB_TITLE']}}</p>
</div>
        <div class="page-content">
    
            <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-cube-outline float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-white text-uppercase mb-3">Total Siswa</h6>
                                    <h4 class="text-white mb-4">{{$count['student']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-buffer float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-white text-uppercase mb-3">Total Mata Pelajaran</h6>
                                    <h4 class="text-white mb-4">{{$count['subject']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-account float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-white text-uppercase mb-3">Total Pengguna</h6>
                                    <h4 class="text-white mb-4">{{$count['users']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary">
                            <div class="card-body mini-stat-img">
                                <div class="mini-stat-icon">
                                    <i class="mdi mdi-file float-right"></i>
                                </div>
                                <div class="text-white">
                                    <h6 class="text-white text-uppercase mb-3">Total Artikel</h6>
                                    <h4 class="text-white mb-4">{{$count['article']}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    
            <div class="row">
    
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Latest Articles</h4>
    
                            <div class="table-responsive mt-5">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Author</th>
                                            <th>Thumbnail</th>
                                            <th>Judul</th>
                                            <th>Created at</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $article)
                                        <tr>
                                            <td>{{ $article->id }}</td>
                                            <td>{{ $article->author->name }}</td>
                                            <td><img src="{{ Storage::url('images/articles/'.$article->thumbnail_image_name) }}" alt=""  style="width:50px"></td>
                                            <td>{{ $article->title }}</td>
                                            <td>{{ Carbon\Carbon::parse($article->created_at)->format('d F Y H:i:s') }}</td>
                                        </tr>
                                        @endforeach
                                        @forelse ($articles as $article)
                                        @empty
                                        <tr>
                                            <td colspan="5" class='text-center'>No Data</td>    
                                        </tr>                                                            
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
@endsection

@section('script')
		<!--Morris Chart-->
        <script src="{{ URL::asset('assets/plugins/morris/morris.min.js')}}"></script>
        <script src="{{ URL::asset('assets/plugins/raphael/raphael-min.js')}}"></script>

		<script src="{{ URL::asset('assets/pages/dashboard.js')}}"></script>
@endsection