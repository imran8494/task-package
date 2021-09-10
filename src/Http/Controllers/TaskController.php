<?php

namespace Mihpack\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mihpack\Contact\Models\Task;

class TaskController extends Controller
{
    //
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        // dd($request->all());

        $task = new Task();
        $task->name = $request->name;
        $task->email = $request->email;
        $task->cv = $request->cv ? 'on' : 'off';
        $task->interest = $request->interest;
        $task->division = $request->division;
        $task->save();
        return redirect()->back();

    }
}
