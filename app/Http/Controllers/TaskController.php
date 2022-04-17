<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->orderBy('name', 'desc')->get();
        return view('child', compact('tasks'));
    }


    public function store(Request $request)
    {
        $tasks =  DB::table('tasks')->insert(['name' => $request->name]);
        return redirect()->back();
    }

    public function delete($id)
    {
        $tasks =  DB::table('tasks')->where('id', '=', $id)->delete();
        return redirect()->back();
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->select('id', 'name')->find($id);
        return view('child', compact('task'));
    }


    public function update(Request $request)
    {
        $tasks = DB::table('tasks')->where('id', '=', $request->id)->update(['name' => $request->name]);

        return redirect()->back();
    }
}
