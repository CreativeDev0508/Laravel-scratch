<?php

use App\Task;

Route::get('tasks', function () {
	$tasks = Task::incomplete()->get();

    return view('tasks.index', compact('tasks'));
});

Route::get('tasks/{task}', function ($id) {
	$task = Task::find($id);
	
    return view('tasks.show', compact('task'));
});
