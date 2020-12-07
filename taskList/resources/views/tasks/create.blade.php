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

                <label for="description" class="control-label">Task Description</label>
                <input type="textarea" class="form-control form-control-lg mt-3" placeholder="Task Description">


                <label for="date" class="control-label">Due Date</label>
                <input type="date" class="form-control form-control-lg mt-3" placeholder="">
                <script type="text/javascript">
                $(function() {
                    $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                    });
                });
                </script>


            </form>
        </div>
    </div>

    @endsection
