<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Str;
use Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $students = Student::where('name', 'LIKE',"%$search%")->orderBy('id','asc')->paginate(10);
        $students->appends(['search'=>$search]);
        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required|file'
        ]);
        
        $photo = $request->file('photo');
        $image_extension = $photo->extension();
        $image_name = Str::slug($request->name).".".$image_extension;
        $photo->storeAs('/images/students', $image_name, 'public');

        $student = new Student;
        $student->name = $request->name;
        $student->description = $request->description;
        $student->image_name = $image_name;
        $student->save();

        session()->flash('success',"Sukses tambah data siswa $request->name");
        return redirect()->route('admin.students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'nullable|file'
        ]);
        
        
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->description = $request->description;
        if($request->hasFile('photo')) {
            Storage::delete('public/images/students/'.$student->image_name);
            $photo = $request->file('photo');
            $image_extension = $photo->extension();
            $image_name = Str::slug($request->name).".".$image_extension;
            $photo->storeAs('/images/students', $image_name, 'public');
            $student->image_name = $image_name;
        }
        $student->save();

        session()->flash('success',"Sukses ubah data siswa $request->name");
        return redirect()->route('admin.students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        Storage::delete('public/images/students/'.$student->image_name);
        $student->delete();

        session()->flash('success', 'Sukses Menghapus Data');
        return redirect()->back();
    }
}
