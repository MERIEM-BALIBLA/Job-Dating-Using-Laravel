<?php

namespace App\Http\Controllers;

use App\Models\Annoucment;
use App\Http\Requests\StoreAnnoucmentRequest;
use App\Http\Requests\UpdateAnnoucmentRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class AnnoucmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annoucements = Annoucment::latest()->paginate(5);
        $companies = Company::all();
        return view('annoucement.annoucement',compact('annoucements','companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request);
        $annoucments=$request->validate([
            'title' => 'required',
            'content' => 'required',
            'company_id' => 'required'
        ]);
        Annoucment::create($annoucments);
        return redirect('annoucement');
    }
    /**
     * Display the specified resource.
     */
    // public function show(Annoucment $annoucment)
    // {
    //     $companies = Company::FindOrFail($id);
    //     // return view('annoucement.annoucement', compact('companies'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annoucment $annoucment)
    {
        // dd($annoucment);
        $companies = Company::all();
        return view('annoucement.update',['annoucement'=>$annoucment, 'companies'=>$companies]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    // {
    //     // dd($request);
    //     $incomingFields = $request->validate([
    //         'title' => 'required',
    //         'content' => 'required',
    //         'company_id' => 'required'
    //     ]);
    //     // Use the update method on the model instance
    //     $annoucment=Annoucment::find($id);
    //     $annoucment->update($incomingFields);
    //     return redirect('annoucement');
    // }

    public function update(Request $request, Annoucment $annoucment)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'company_id' => 'required'
        ]);
        $annoucment->update($incomingFields);
        return redirect('annoucement');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annoucment $annoucment)
        {
            $annoucment->delete();
            return redirect('annoucement');
            // try {
            //     $annoucment->delete();
            //     return redirect('annoucement');
            // } catch (\Exception $e) {
            //     dd($e->getMessage()); // Print the exception message for debugging
            // }
        }

    public function show($id)
    {
        $annoucements = Annoucment::findOrFail($id);
        return view('annoucement.singlePage', compact('annoucements'));
    }

    public function deleteAll()
    {
        Annoucment::truncate();
        redirect('annoucement');
        return   response()->json(['message' => 'Toutes les annonces ont été supprimées avec succès.']);
    }
}
