<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $crud = crud::latest()->paginate(10);
        return view('index', ['crud'=> $crud]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'f_Name'=> 'required',
            'l_Name'=> 'required',
            'u_Name' => 'required|unique:cruds|min:8',
            'city' => 'required',
        ]);
        $crud = new crud;
        $crud->f_Name = $request->f_Name;
        $crud->l_Name = $request->l_Name;
        $crud->u_Name = $request->u_Name;
        $crud->city = $request->city;
        $crud->save();
        return redirect('index')->with('status', 'User Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud = crud::find($id);
        return view('crud.view', ['crud'=> $crud]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = crud::find($id);
        return view('crud.edit', ['crud'=> $crud]);
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
        $crud = crud::find($id);
        $crud->f_Name = $request->f_Name;
        $crud->l_Name = $request->l_Name;
        $crud->u_Name = $request->u_Name;
        $crud->city = $request->city;
        $crud->save();
        return redirect('index')->with('status', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        crud::destroy($id);       
        return redirect('index')->with('status', 'User Deleted Successfully!');
    }
}
