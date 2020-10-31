@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="card">
  <div class="card-body">
    Create Task
  </div>
</div>
</div>
</br>

@if(session()->has('message'))
<div class="row justify-content-center">
<div class="card .bg-success">
  <div class="card-body">
        {{ session()->get('message') }}
        </div>
</div>
</div>
@endif

</br>
<div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">View all assigned tasks</h5>
                <p class="card-text"></p>
                <a href="{{route('ViewTask')}}" class="btn btn-danger">Click Here to View Tasks</a>
            </div>
        </div>
        </div>
</br>
<div class="row justify-content-center">
    <form name="create_task" method="post" action="{{route('CreateTaskConfirm')}}">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Task title</label>
            <input name="task_title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Eg: Create automation" required='required'>
        </div>
        
        <label for="status">Task status : </label>
        <select name="status" id="status" class="dropdown" required='required'>
        <option value="Todo">Todo</option>
        <option value="Doing">Doing</option>
        <option value="Done">Done</option>
        <option value="QA">QA</option>
        <option value="Finished">Finished</option>
        </select>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Task description</label>
            <textarea name="task_description" class="form-control" id="exampleFormControlTextarea1" rows="3" required='required'></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>
@endsection