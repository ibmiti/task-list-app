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
            <div class="row">
                <label for="name" class="control-label">Task Name</label>
                <input type="text" class="form-control form-control-lg" placeholder="Task Name">
            </div>

            <div class="row">
                <label for="description" class="control-label">Task Description</label>
                <input type="textarea" class="form-control form-control-lg mt-3" placeholder="Task Description">
            </div>

            <div class="row">
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
            </div>

            <div class="row">
                <label for="priority" class="control-label">Priority Level</label>
                <input type="textarea" class="form-control form-control-lg mt-3" placeholder="low | medium | high | critical">
            </div>



            <div class="row">
                <label for="status" class="control-label">Status</label>
                <input type="textarea" class="form-control form-control-lg mt-3" placeholder="pending | inprogress | complete">
            </div>

        

            </form>
        </div>
    </div>

    @endsection
