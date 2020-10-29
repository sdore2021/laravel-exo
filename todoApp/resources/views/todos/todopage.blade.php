@extends('layouts.app')

@section('content')
            <h1 class="text-center my-5">MY TODO PAGE </h1>
            
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card card-default">
                        <div class="card-header">
                            Todos
                        </div>
                        <div class="card-body">
                                @foreach($todos as $todo)
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                                {{ $todo->name }}
                                                <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right">view</a>
                                                <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger mr-2 btn-sm float-right">delete</a>
                                                @if(!$todo->completed)
                                                    <a href="/todos/{{$todo->id}}/complete" class="btn btn-warning mr-2 btn-sm float-right">complete</a>
                                                @endif
                                        </li>
                                    </ul>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection