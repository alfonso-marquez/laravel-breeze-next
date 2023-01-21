<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Models\Employee;
use App\Models\User;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        // dd($employees);
        return response()->json([
            'employees' => $employees
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeRequest $request)
    {
        $employee = Employee::create($request->all());

        return response()->json([
            'message' => "Employee Created successfully!",
            'employee' => $employee
        ], 200);
    }

    public function show(Request $request)
    {
        $employee = Employee::with('user')->where('id',$request->id)->get();
        // dd($employee);
         return response()->json([
            'employee' => $employee
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployeeRequest $request, Employee $employee)
    {
        $employee->update($request->all());

        return response()->json([
            'message' => "Employee Updated successfully!",
            'employee' => $employee
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return response()->json([
            'message' => "Employee Deleted successfully!",
        ], 200);
    }
}
