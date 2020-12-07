this is index

<!-- display all task -->

<!-- create link to task page -->
<ul>
    <li>
        <a href="{{ url('tasks/create') }}">Create Task</a>
    </li>
    <li>
        <a href="{{ url('tasks/edit') }}">Edit Task</a>
    </li>
    <li>
        <a href="{{ url('tasks/update') }}">Update Task</a>
    </li>
    <li>
        <a href="{{ url('tasks/delete') }}">Delete Task</a>
    </li>
</ul>