<?php

namespace App\Http\Controllers;

use App\Models\employeeinfo;
use Illuminate\Http\Request;



class EmployeeinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employs = employeeinfo::paginate(10);
        return view('employees.index')->with('employs',$employs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('employees.create');
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
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'required|email|unique:employees,email',
            'mobile_no' => 'required|string|max:20',
            'address' => 'required|string|max:255'
        ]);
        $store = employeeinfo::create($request->all());
        $store->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\employeeinfo  $employeeinfo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employs = employeeinfo::find($id);
        return view('employees.show')->with('employs',$employs);
    }

    public function search(Request $request)
    {
        $infsrc = $request->input('search');
        $employs1 = employeeinfo::where('id','like','%'.$infsrc.'%')
        ->paginate(10);
        
        return view('employees.index')->with('employs',$employs1);
    }
    // public function search(Request $request){
    //     $search = $request->input('search');
    //     $employ= employeeinfo::where('name','like','%'.$search.'%')
        
    //     ->paginate(10);
        
    //     return View('employees.index')->with('employs',$employ);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\employeeinfo  $employeeinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(employeeinfo $employeeinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\employeeinfo  $employeeinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employeeinfo $employeeinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\employeeinfo  $employeeinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id1 = employeeinfo::find($id);
        $id1->delete();
        return redirect()->route('employees.index');
        
    }
}
