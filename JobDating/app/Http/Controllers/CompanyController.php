<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::latest()->paginate(5) ;
        // ->with('i', (request()->input('page', 1) - 1) * 5);

        return view('company.company',compact('companies'));
    }

    public function create(Request $request)
    {
        // dd($request);
        $incomingFields=$request->validate([
            'company_name' => 'required',
            'company_role' => 'required',
            'address' => 'required'
        ]);
    
        Company::create($incomingFields);
    
        return redirect('company');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('company.update',['company'=>$company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $incomingFields = $request->validate([
            'company_name' => 'required',
            'company_role' => 'required',
            'address' => 'required'
        ]);

        $company->update($incomingFields);
        return redirect('company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('company');
    }

    public function show($id)
    {
        // echo 'helo world';
        $companies = Company::findOrFail($id);
        return view('company.singlePage', compact('companies'));
    }

    // public function deleteAll()
    // {
    //     Company::truncate();
    //     redirect('companies');
    //     return   response()->json(['message' => 'Toutes les annonces ont été supprimées avec succès.']);
    // }

    public function deleteAll()
    {
        Company::truncate();
        redirect('company');
        return   response()->json(['message' => 'Toutes les annonces ont été supprimées avec succès.']);
    }

}
