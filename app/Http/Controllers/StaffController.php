<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('admin.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fonctions = Fonction::all();
        return view('admin.fonctions.create', compact('fonctions'));
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
            "nom" => ['required'],
            "prenom" => ['required'],
            "image" => ['required', 'image'],
            "description" => ['required'],
            "fonction_id" => ['required', 'exists:fonctions,id'],
        ]);

        $staff = new Staff();
        $staff->nom = $request->nom;
        $staff->prenom = $request->prenom;
        $staff->description = $request->description;
        $staff->fonction_id = $request->fonction_id;
        $image = Storage::disk('public')->put('', $request->image);
        $staff->img = $image;
        $staff->save();
        return redirect()->route('staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $fonctions = Fonction::all();
        return view('admin.fonctions.create', compact('fonctions', 'staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            "nom" => ['required'],
            "prenom" => ['required'],
            "image" => ['required', 'image'],
            "description" => ['required'],
            "fonction_id" => ['required', 'exists:fonctions,id'],
        ]);

        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($staff->img)) {
                Storage::disk('public')->delete($staff->img);
            }
            $image = Storage::disk('public')->put('', $request->image);
            $staff->img = $image;
        }

        $staff->nom = $request->nom;
        $staff->prenom = $request->prenom;
        $staff->description = $request->description;
        $staff->fonction_id = $request->fonction_id;
        $image = Storage::disk('public')->put('', $request->image);
        $staff->save();
        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        if (Storage::disk('public')->exists($staff->img)) {
            Storage::disk('public')->delete($staff->img);
        }
        $staff->delete();
        return back();
    }
}
