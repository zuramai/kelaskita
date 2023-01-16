<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Day;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Student::orderBy('id','asc')->limit(4)->get();
        $articles = Article::orderBy('id','desc')->limit(3)->get();
        return view('home', compact('students','articles'));
    }

    public function student_index(Request $request) {
        $students = Student::orderBy('name','asc')->get();
        return view('students.index', compact('students'));
    }
    
    public function student_show($id) {
        $student = Student::findOrFail($id);
        return view('students.detail', compact('student'));
    }

    public function article_index() {
        $articles = Article::orderBy('id', 'desc')->paginate(10);
        return view('articles.index', compact('articles'));
    }
    
    public function article_show($id) {
        $article = Article::findOrFail($id);
        return view('articles.detail', compact('article'));
    }

    public function jadwal_pelajaran() {
        $days = Day::orderBy('id','asc')->get();
        return view('jadwal-pelajaran', compact('days'));
    }

    public function jadwal_piket() {
        $days = Day::orderBy('id','asc')->get();
        return view('jadwal-piket', compact('days'));
    }
}
