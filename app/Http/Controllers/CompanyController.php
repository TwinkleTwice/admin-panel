<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    public function list()
    {
        $companies = Company::all();

        return response()->json(['companies' => $companies]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:companies',
            'address' => 'string|max:255|nullable',
            'logo' => 'image|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100',
        ]);

        if($request->hasFile('logo')) {
            $image = $request->file('logo')->store('images', 'public');
        }

        Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'logo' => $image ?? '',
        ]);

        return redirect()->route('companies.index');
    }

    public function show($id)
    {
        $company = Company::query()->with('employees')->findOrFail($id);
        return view('companies.show', compact('company'));
    }

    public function edit($id)
    {
        $company = Company::query()->findOrFail($id);

        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::query()->findOrFail($id);

        $data = $request->validate([
            'name' => 'string',
            'email' => 'email',
            'address' => 'string|max:255|nullable',
            'logo' => 'image|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100',
        ]);

        if($request->hasFile('logo')) {
            if (!empty($company->logo) && Storage::disk('public')->exists($company->logo))
            {
                unlink(public_path('storage/'.$company->logo));
            }
            $image = $request->file('logo')->store('images', 'public');
        }

        $company->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'logo' => $image ?? '',
        ]);

        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return back();
    }
}
