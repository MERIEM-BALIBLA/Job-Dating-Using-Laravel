<?php

namespace App\Http\Controllers;

use App\Models\Annoucment;
use App\Models\Company;
// use App\Models\WelcomeController;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::latest()->paginate(5);
        $annoucements = Annoucment::latest()->paginate(5);
        // dd('hello');
        return view('welcome',compact('companies','annoucements'));   
    }

    public function allAnnoucement()
    {
        // $companies = Company::latest()->get();
        $annoucements = Annoucment::latest()->get();
        // dd('hello');
        return view('welcome',compact('annoucements'));   
    }

    // public function show($id)
    // {
    //     $company = Company::findOrFail($id); // Récupère l'entreprise en fonction de l'ID
    //     return view('company.show', compact('company'));
    // }
    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(WelcomeController $welcomeController)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(WelcomeController $welcomeController)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, WelcomeController $welcomeController)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(WelcomeController $welcomeController)
    // {
    //     //
    // }
}
