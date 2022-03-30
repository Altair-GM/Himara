<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
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
        return view('admin.staff.create', compact('fonctions'));
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
            "img" => ['required', 'image'],
            "description" => ['required'],
            "fonction_id" => ['required', 'exists:fonctions,id'],
        ]);

        $staff = new Staff();
        $staff->nom = $request->nom;
        $staff->prenom = $request->prenom;
        $staff->description = $request->description;
        
        $staff->fonction_id = $request->fonction_id;
        $image = Storage::disk('public')->put('images', $request->img);
        $staff->img = $image;
        $staff->save();
        return redirect()->route('admin.staff');
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
    public function edit($staff)
    {
        $staff = Staff::find($staff);
        $fonctions = Fonction::all();
        return view('admin.staff.edit', compact('fonctions', 'staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $staff)
    {
        $request->validate([
            "nom" => ['required'],
            "prenom" => ['required'],
            "img" => ['required', 'image'],
            "description" => ['required'],
            "fonction_id" => ['required', 'exists:fonctions,id'],
        ]);

        $staff = Staff::find($staff);

        if ($request->hasFile('img')) {
            // if (Storage::disk('public')->exists($staff->img)) {
            //     Storage::disk('public')->delete($staff->img);
            // }
            $image = Storage::disk('public')->put('images', $request->img);
            $staff->img = $image;
        }

        $staff->nom = $request->nom;
        $staff->prenom = $request->prenom;
        $staff->description = $request->description;
        if ($staff->fonction_id != 1) {

            if ($request->fonction_id == 1) {
                $houseKeep = Staff::where('fonction_id', 1)->first();
                $houseKeep->fonction_id = $staff->fonction_id;
                $houseKeep->save();
            }
            $staff->fonction_id = $request->fonction_id;
        }
        $staff->save();
        return redirect()->route('admin.staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($staff)
    {
        $staff = Staff::find($staff);
        if ($staff->fonction_id != 1) {
            // if (Storage::disk('public')->exists($staff->img)) {
            //     Storage::disk('public')->delete($staff->img);
            // }
            $staff->delete();
        }
        return back();
    }
}
