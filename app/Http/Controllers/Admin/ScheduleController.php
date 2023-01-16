<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Subject;
use App\Models\Day;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $schedules = Schedule::whereHas('subject', function($q) use ($search) {
            $q->where('name','LIKE',"%$search%");
        })->orderBy('day_id','asc')->paginate(10);
        $schedules->appends(['search'=>$search]);

        $days = Day::all();
        
        return view('admin.schedules.index', compact('schedules', 'days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        $days = Day::all();
        return view('admin.schedules.add', compact('subjects', 'days'));
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
            'subject' => 'required|exists:subjects,id',
            'day' => 'required|exists:days,id',
            "start_time" => 'required',
            'end_time' => 'required'
        ]);

        $create = Schedule::create([
            'subject_id' => $request->subject,
            'day_id' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        session()->flash('success',"Sukses tambah jadwal pelajaran $request->name");
        return redirect()->route('admin.schedules.index');
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
        $subjects = Subject::all();
        $days = Day::all();
        $schedule = Schedule::findOrFail($id);
        return view('admin.schedules.edit', compact('schedule', 'days','subjects'));
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
            'subject' => 'required|exists:subjects,id',
            'day' => 'required|exists:days,id',
            "start_time" => 'required',
            'end_time' => 'required'
        ]);

        $create = Schedule::findOrFail($id)->update([
            'subject_id' => $request->subject,
            'day_id' => $request->day,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        session()->flash('success',"Sukses ubah jadwal pelajaran $request->name");
        return redirect()->route('admin.schedules.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        session()->flash('success', 'Sukses Menghapus Data');
        return redirect()->back();
    }
}
