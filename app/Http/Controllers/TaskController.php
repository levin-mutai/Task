<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function __invoke(User $user_id)
    {
        // dd(
        //     $user_id->tasks()->orderby('due_date', 'desc')->get()
        // );
        return view('tasks', [
            'tasks' => $user_id->tasks()->orderby('due_date', 'desc')->get()
        ]);
    }
}
