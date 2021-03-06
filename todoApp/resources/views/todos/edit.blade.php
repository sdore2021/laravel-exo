@extends('layouts.app')

@section('content')
<form action="/todo-update" method="post">
    <input type='hidden' name='todo_id' value='{{$todo->id}}' />
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card card-default">
                <div class="card-header">
                    Edit Todo
                </div>
                <div class="card-body">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-item">                       
                               {{$error}}                 
                            </li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="form-group">
                        <input type="text" name="name" placeholder="name" class="form-control" value="{{$todo->name}}"/>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" id="description" placeholder="Description" cols="5" rows="5">{{$todo->description}}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="bnt bnt-success">update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection