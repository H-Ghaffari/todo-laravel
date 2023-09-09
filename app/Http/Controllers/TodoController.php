<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function test(){
        // return Todo::factory()->count(10)->make();
        $fake=Todo::factory()->count(20)->create();
        return view('todo.test', compact('fake'));
    }
    
    public function index()
    {
        // $todos = Todo::all();
        $todos = Todo::latest()->paginate(5);
        return view('Todo.index', compact('todos'));
    }

    //old approach
    // public function show($id){
    //     $todo = Todo::findOrFail($id);
    // }

    //new approach
    public function show(Todo $todo){
        return view('Todo.show', compact('todo'));
    }

    public function create(){
        return view('Todo.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'title'=>'required',
            'description'=> 'required'
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        //https://realrashid.github.io/sweet-alert/usage?id=usage
         alert()->success('با تشکر','تسک با موفقیت ایجاد شد')->position('top');
        // toast('Success Toast','success');
        return redirect()->route('todo.index');
    }

    public function edit(Todo $todo){
        return view('Todo.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo){

        $request->validate([
            'title'=>'required',
            'description'=> 'required'
        ]);

       $todo->update([
            'title' => $request->title,
            'description' => $request->description
        ]);
        
        alert()->success('با تشکر','تسک با موفقیت ویرایش شد')->position('top');
        return redirect()->route('todo.index');
    }

     public function delete(Todo $todo){
        $todo->delete();
        alert()->error('توجه','تسک با موفقیت حذف شد')->position('top');
        return redirect()->route('todo.index');
     }

     public function complete(Todo $todo){
        $todo->update([
            'completed' => 1
        ]);
        alert()->success(' باتشکر', 'تسک مورد نظر به وضعیت "انجام شد" تغییر پیدا کرد')->position('top');
        return redirect()->route('todo.index');
     }

}