<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
          $datas = Todo::paginate(10);

        //$datas = Todo::all()->reject(function ($todo){
        //return $todo->done == 0 ;
        //})
        //; 

        return view ('todos.index', compact('datas'));
    }
    
       //ajout de la foonction done

       public function done()

       {
         $datas = Todo::where('done', 1)->paginate(10);
         
           return view ('todos.index',compact('datas'));
       }

       //ajout de la foonction undone

       public function undone()

       {
         $datas = Todo::where('done', 0)->paginate(10);
         
           return view ('todos.index',compact('datas'));
       }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $todo = new Todo();
        $todo->name = $request->name;
        $todo->description = $request->description;
         $todo->save();

         return redirect()->route('todos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
