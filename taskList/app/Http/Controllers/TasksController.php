<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // on index view query task table by due_date - asc and limit return to total 10
        $tasks = Task::orderBy('due_date', 'asc')->get()->take(10);
        // to this view show the queried tasks 
        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // this will be the tasks create view
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate The Data
        $this->validate($request, [
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:10000|min:10',
            'due_date' => 'required|date',
        ]);

        // Create a New task
        $task = new Task;

        // Assign the Task data from our request
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;

        // Save the task
        $task->save();

        // Flash Session Message with Success
        \Session::flash('success', 'Created Task Successfully');
    
        // after storing data return back to index
        return redirect()->route('index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find individual - specified tasks from db\table
        $task = Task::find($id);
        $task->dueDateFormatting = false;
        // return with specified record to edit view
        return view('tasks.edit')->withTask($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)  // update specific record 
    {

         // Validate The Data
         $this->validate($request, [
            'name' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:10000|min:10',
            'due_date' => 'required|date',
        ]);

        // Find the related task
        $task = Task::find($id);

        // Assign the Task data from our request
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;

        // Save the task into db\table
        $task->save();

        // Flash Session Message with Success
        \Session::flash('success', 'Saved The Task Successfully');

        // return redirect to route name 'index'
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // query to delete specific record 
        \DB::delete('delete from tasks where id = ?',[$id]);

        // on delete success send this to session
        \Session::flash('success', 'Deleted The Task Successfully');

        // return to index view with specified record deleted 
        return redirect()->route('index');
    }
}
