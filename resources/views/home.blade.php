@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        </br>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Task Tracking</h5>
                <p class="card-text"></p>
                <a href="{{route('CreateTask')}}" class="btn btn-primary">Create Task</a>
                <a href="{{route('ViewTask')}}" class="btn btn-primary">View Task</a>
            </div>
        </div>
    </div>
  
</div>
@endsection
