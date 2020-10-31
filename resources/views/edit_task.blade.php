@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
<div class="card">
  <div class="card-body">
    Edit Task Details
  </div>
</div>
</div>
</br>

<div class="row justify-content-center">
    <form name="create_task" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Task title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Eg: Create automation">
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Task status
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Todo</a>
                <a class="dropdown-item" href="#">Doing</a>
                <a class="dropdown-item" href="#">Done</a>
                <a class="dropdown-item" href="#">QA</a>
                <a class="dropdown-item" href="#">Finished</a>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Task description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</div>
@endsection