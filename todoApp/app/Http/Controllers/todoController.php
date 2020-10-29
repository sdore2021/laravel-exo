<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class todoController extends Controller
{
    public function index(){

        return view('todos.todopage')->with('todos',Todo::all());
    }

    public function show($todo){
        return view('todos.show')->with('todo',Todo::find($todo));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(){
       
        $this->validate(request(),[
            'name' =>  'required',
            'description' => 'required',
        ]);

        $data = request()->all();

        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success','todo create successfully');

        return redirect('/todos');

    }

    public function edit($todo)
    {
        return view('todos.edit')->with('todo',Todo::find($todo));
    }

    public function update(){
        $this->validate(request(),[
            'name' =>  'required',
            'description' => 'required',
        ]);

        $data = request()->all();
        $todo = Todo::find($data['todo_id']);

        $todo->name = $data['name'];
        $todo->description = $data['description'];

        $todo->save();
        session()->flash('success','todo update successfully');

        return redirect('/todos');
    }

    public function delete($todo)
    {
        $todo = Todo::find($todo);
        $todo->delete();
        session()->flash('success','todo delete successfully');

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();
        session()->flash('success','todo completed successfully');

        return redirect('/todos');
    }
}
