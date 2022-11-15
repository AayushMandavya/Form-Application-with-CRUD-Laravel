<?php

namespace App\Http\Controllers;
use App\Models\TodoList;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        return view('welcome',['items'=>TodoList::all()]);
    }
    public function saveTodo(Request $req)
    {
        $todoobj= new TodoList();   
        $todoobj->title =$req->todo;
        $todoobj->save();
        return redirect("/");     
    }
    public function deleteItem($id){
        $item = TodoList::find($id);
        $item->delete();
        return redirect("/");
    }
    public function editItem($id){
        $item = TodoList::find($id);
        return view("edit",['item'=>$item]);
    }
    public function updateTodo(Request $req, $id)
    {
        $updatedItem = TodoList::find($id);
        $updatedItem->title = $req->todo;
        $updatedItem->save();
        return redirect("/");     
    }
}
