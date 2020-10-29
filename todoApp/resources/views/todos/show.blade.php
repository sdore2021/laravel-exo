@extends('layouts.app')
@section('content')
            <div class="row justify-content-center">
                    <div class="col-md-8">
                    <div class="card card-default">
                            <div class="card-header">
                                <h1 class="text-center">
                                    {{$todo->name}}
                                </h1>
                            </div>
                            <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">
                                {{$todo->description}}
                                </li>
                                <li class="list-group-item text-center">
                                <a href="/todos/{{$todo->id}}/edit" class="bnt bnt-info bnt-sm my-2">Edit</a>
                                </li>
                            </ul>
                               

                            </div>
                     </div>
                    
                    </div>
            </div>
       </div>
        
@endsection