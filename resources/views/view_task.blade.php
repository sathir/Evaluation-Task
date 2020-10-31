@extends('layouts.app')

@section('content')

</br>

<div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Create new task</h5>
                <p class="card-text"></p>
                <a href="{{route('CreateTask')}}" class="btn btn-danger">Click Here to Create Task</a>
            </div>
        </div>
        </div>
</br>

<div class="row justify-content-center">
    <div class="card">
        <div class="card-body">
            List of tasks created
        </div>
    </div>
</div>
</br>

<div class="row justify-content-center">
<div class="justify-content-center">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Task title</th>
                <th scope="col">Task status</th>
                <th scope="col">Task description</th>
                <th scope="col">Edit Task</th>
            </tr>
        </thead>
        <tbody>

            @foreach($tasks as $task)
            <tr>
                <td>{{$task->task_title}}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Task status
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach($tasks as $task)
                            <option value="{{$task->task_status}}">{{$task->task_status}}</option>
                            @endforeach
                        </div>
                    </div>
                </td>
                <td>{{$task->task_description}}</td>
                <td><button class="btn btn-warning" onclick="window.location.href=''" type="submit">Click here to
                        edit</button></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>
</br>
@endsection