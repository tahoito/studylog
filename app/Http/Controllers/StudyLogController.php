<?php

namespace App\Http\Controllers;

use App\Models\StudyLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyLogController extends Controller
{
    public function index()
    {
        $logs = StudyLog::where('user_id',Auth::id())
            ->orderBy('study_date','desc')
            ->get();
        return view('study_logs.index',compact('logs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'minutes' => 'required|integer|min:1',
            'study_date' => 'required|date',
        ]);

        StudyLog::create([
            //'user_id' => Auth::id(),
            'user_id' => 1,
            'subject' => $request->subject,
            'minutes' => $request->minutes,
            'study_date' => $request->study_date,
        ]);

        return redirect()->route('study-logs.index')->with('success','勉強記録を追加しました');

    }

    /**
     * Display the specified resource.
     */
    public function show(StudyLog $studyLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudyLog $studyLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudyLog $studyLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudyLog $studyLog)
    {
        //
    }
}
