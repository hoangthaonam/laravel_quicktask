<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }
    public function changeLanguage($language)
    {
        session(['language' => $language]);
        return redirect()->back();
    }
}
