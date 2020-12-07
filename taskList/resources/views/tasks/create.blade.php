@extends('layouts.main')

@section('title', 'Create Task')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <h1>Create Task</h1>

            <form method="POST" action="{{ route('store') }}">
            @csrf
            <div class="row">
                <label for="name" class="control-label">Task Name</label>
                <input type="text" name="task" class="form-control form-control-lg" placeholder="Task Name">
            </div>

            <div class="row mt-3">
                <label for="description" class="control-label">Task Description</label>
                <input type="textarea" name="description" class="form-control form-control-lg mt-3" placeholder="Task Description">
            </div>

            <div class="row mt-3">
                <label for="date" class="control-label">Due Date</label>
                <input type="date" name="due_date" class="form-control form-control-lg mt-3" placeholder="">
                <script type="text/javascript">
                $(function() {
                    $( "#datepicker" ).datepicker({
                    changeMonth: true,
                    changeYear: true
                    });
                });
                </script>
            </div>

            <div class="row mt-3>
                <label for="priority" class="control-label">Priority Level</label>
                <input type="textarea" name="priority" class="form-control form-control-lg mt-3" placeholder="low | medium | high | critical">
            </div>


            <div class="row mt-3">
                <label for="status" class="control-label">Status</label>
                <input type="textarea" name="status" class="form-control form-control-lg mt-3" placeholder="pending | inprogress | complete">
            </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-sm-6">
                        <button class="btn btn-block btn-success" type="submit">Create Task</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endsection
