<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    //

    public function index(){
        return Task::all();
    }
    public function store(Request $request){
        Task::create($request->all());
        return response()->json([
            'message'=>"created successfully",
        ],Response::HTTP_CREATED);
    }

    public function show($id){
        $task = Task::find($id);

        if($task) {
            return $task;
        }else {
            return response()->json([
                "message"=>"Task not found"
            ],Response::HTTP_NOT_FOUND);
        }
    }

    public function update(Request $request,$id){

        $task=Task::find($id);

        if($task){
            $task->fill($request->all())->save();
            return response()->json([
                "message"=>"updated successfully"
            ],Response::HTTP_OK);
        }else {
            return response()->json([
                "message"=>"Task not found"
            ],Response::HTTP_NOT_FOUND);
        }
    }

    public function destroy($id){

        $task =Task::find($id);
        if($task) {
            $task->delete();
            return response()->json([
                "message"=>"deleted successfully"
            ],Response::HTTP_OK);
        }else {
            return response()->json([
                "message"=>"Task not found"
            ],Response::HTTP_NOT_FOUND);
        }

    }


}
