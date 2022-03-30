<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('webmaster')->only(['update', 'index']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations= Reservation::orderBy('fin')->get();
        return view('admin.reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request)
    {

        $request->validate([
            'nom' => ['required'],
            'email' => ['required'],
            'booking_date' => ['required'],
            'adult' => ['required'],
            'enfant' => ['required'],
        ]);
        // dd($request->booking_date);
        $dates = explode(' - ', $request->booking_date);
        // dd($dates);
        $debut = $dates[0];
        $fin = $dates[1];
        $reservation = new Reservation();
        $reservation->nom = $request->nom;
        $reservation->email = $request->email;
        $reservation->debut = Carbon::parse($debut);
        $reservation->fin = Carbon::parse($fin);
        $reservation->adult = $request->adult;
        $reservation->enfant = $request->enfant;
        $reservation->commentaire = $request->commentaire;
        $reservation->telephone = $request->telephone;
        $reservation->country = $request->country;
        $reservation->valide = false;
        $reservation->category_chambre_id = $request->category_chambre_id;
        $reservation->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $reservation = Reservation::find($id);
        $reservation->valide = true;
        $reservation->save();
        Mail::to($reservation->email, $reservation->nom)->later(now()->addSeconds(30), new ReservationMail($reservation));
        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
