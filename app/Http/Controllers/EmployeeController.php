<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     * Created by preethal(May 15 2024)
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with('companyData')->get();
        return view('home', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('add-employee',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->fill($request->validated());
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'Employee added successfully.');
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
        $employee = Employee::findOrFail($id);
        return response()->json($employee);

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
        $employee = Employee::findOrFail($id); // Retrieve the employee or throw a 404 error if not found
        $input = $request->all();
        $employee->first_name = $input['first_name'];
        $employee->last_name = $input['last_name'];
        $employee->company_id = $input['company_id'];
        $employee->email = $input['email'];
        $employee->phone = $input['phone'];
        $employee->save();

        return response()->json([
            'success' => true,
            'message' => 'Employee updated successfully.',
            'employee' => $employee
        ]);

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $employee = Employee::findOrFail($id);
    $employee->delete();
        return response()->json([
            'success' => true,
            'message' => 'Deleted successfully.',
            'employee' => $employee
        ]);    }

    public function employeeDetails()
    {
        $employees = Employee::with('companyData')->get();
        return response()->json($employees);
    }
    public function addEmployee(EmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->fill($request->validated());
        $employee->save();
        return response()->json([
            'success' => true,
            'message' => 'Employee added successfully.',
            'employee' => $employee
        ]);    }


}
