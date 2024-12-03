<?php
//codeby Utsho
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = \App\Models\Employee::all();
        return view('employees.index', compact('employees'));
    }
    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        \App\Models\Employee::create($request->all());
        return redirect('/employees');
    }
    public function show($id)
    {
        // Fetch employee data by ID
        $employee = Employee::find($id);
        //codeby Utsho
        if (!$employee) {
            abort(404, 'Employee not found');
        }
        // Return the employee details view and pass the employee data
        return view('employees.details', compact('employee'));
    }
}
