@extends('layouts.main')

@section('title', 'Create Task')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Task</h1>
<!-- 
            @component('components.taskForm')
            @endcomponent -->
            <form method="POST" action="task.store">
                <label for="name" class="control-label">Task Name</label>
                <input type="text" class="form-control form-control-lg" placeholder="Task Name">
            </form>
        </div>
    </div>

    @endsection
