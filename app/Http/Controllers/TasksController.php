<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
        $tasks = Tasks::query()->get();
        $task_data = array();
        foreach ($tasks as $item){
            $task = Tasks::query()
                ->where('id', $item['id'])
                ->first();
            $task_array = array(
                'data' => $item,
                'status' => $task->status,
                'labels' => $task->label
            );
            $task_data[] = $task_array;
        }
        return $task_data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function create()
    {
        return 'Creating a task.';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|string
     */
    public function store(Request $request)
    {
        return 'Store a newly created resource in storage.';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function show($id)
    {
        $task = Tasks::query()
            ->where('id', $id)
            ->first();
        foreach ($task->status as $status){
            var_dump($status->name);
        }
        $labels = $task->label;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function edit($id)
    {
        return 'edit task id - ' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function update(Request $request, $id)
    {
        return 'updating task id - ' . $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response|string
     */
    public function destroy($id)
    {
        return 'remove task id - ' . $id;
    }
}
