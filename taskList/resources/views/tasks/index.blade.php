@extends('layouts.main')

@section('title', 'Tasks Home')

@section('content')
	
	<div class="row justify-content-center mb-3">
            <h1 class="jumbotron">Tasks App</h1>
		<!-- </div> -->
	</div>
	
	@foreach($tasks as $task)
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
				<a href="{{ route('edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
			</div>
		</div>
		<hr>
	@endforeach


	<div class="row justify-content-center mt-4">
		<div class="col-sm-6 text-center">
        <ul style="list-style:none;">
            <li>
                <a class="btn btn-block btn-success" href="{{ url('tasks/create') }}">Create Task</a>
            </li>
        </ul>

		</div>
	</div>

@endsection