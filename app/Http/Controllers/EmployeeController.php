<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employees.index');
    }

    public function list()
    {
        $employees = Employee::all();

        return response()->json(['employees' => $employees]);
    }

    public function create()
    {
        $companies = Company::all();

        return view('employees.create', compact('companies'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:employees',
            'phone' => 'required|string',
            'company_id' => 'exists:companies,id',
        ]);

        Employee::create($data);

        return redirect()->route('employees.index');
    }

    public function show($id)
    {
        $employee = Employee::query()
            ->with('company')
            ->findOrFail($id);

        return view('employees.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::query()
            ->findOrFail($id);

        $companies = Company::all();

        return view('employees.edit', compact('employee', 'companies'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::query()
            ->findOrFail($id);

        $data = $request->validate([
            'name' => 'string',
            'email' => 'email',
            'phone' => 'string',
            'company_id' => 'exists:companies,id',
        ]);

        $employee->update($data);

        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();
        return back();
    }
}
