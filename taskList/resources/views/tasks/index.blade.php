@extends('layouts.main')

@section('title', 'Tasks Home')

@section('content')
	
	<div class="row justify-content-center mb-3">
		<!-- <div class="col-sm-4"> -->
			<!-- <a href="{{ route('create') }}" class="btn btn-block btn-success">Create Task</a> -->
            <h1 class="jumbotron">Tasks App</h1>
		<!-- </div> -->
	</div>

	@if ($tasks ?? '' ?? '')
	@foreach($tasks ?? '' as $task)

		<div class="row">
			<div class="col-sm-12">
				<h3>
					{{ $task->name ?? '' }}
					<small>{{ $task->created_at ?? '' }}</small>
				</h3>
				<p>{{ $task->description ?? '' }}</p>
				<h4>Due Date: <small>{{ $task->due_date ?? '' }}</small></h4>
                <h4>Priority level: <small> {{ $task->priority ??  '' }}</small></h4>
                <h4>Status : <small> {{ $task->status ?? '' }}</small></h4>
				<a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
			</div>
		</div>
		<hr>
	@endforeach
    @elseif ($tasks ?? '' == '' || null)
        <div class="container container-fluid center">
            <h3>Create Task to view Tasks</h3>
        </div>
    @endif

	<div class="row justify-content-left">
		<div class="col-sm-6 text-left">
        <ul style="list-style:none;">
            <li>
                <a class="btn btn-block btn-success" href="{{ url('tasks/create') }}">Create Task</a>
            </li>
            <li>
                <a class="btn btn-block btn-success mt-2" href="{{ url('tasks/edit') }}">Edit Task</a>
            </li>
            <li>
                <a class="btn btn-block btn-success mt-2" href="{{ url('tasks/create') }}">Update Task</a>
            </li>
            <li>
                <a class="btn btn-block btn-success mt-2" href="{{ url('tasks/create') }}">Delete Task</a>
            </li>
        </ul>

		</div>
	</div>

@endsection