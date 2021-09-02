<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
  /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
  public function index()
  {
    $participants = Participant::all();
    return response()->json($participants);
  }

  /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
  public function store(Request $request)
  {
    // $request->validate([
    //   'name' => 'required|max:255',
    //   'age' => 'required',
    //   'dob' => 'required',
    //   'profession' => 'required',
    //   'locality' => 'required',
    //   'number_of_guests' => 'required',
    //   'address' => 'required'
    // ]);

    $newParticipant = new Participant([
      'name' => $request->get('name'),
      'age' => $request->get('age'),
      'dob' => $request->get('dob'),
      'profession' => $request->get('profession'),
      'locality' => $request->get('locality'),
      'number_of_guests' => $request->get('number_of_guests'),
      'address' => $request->get('address')
    ]);

    $newParticipant->save();

    return response()->json($newParticipant);
  }

  /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function show($id)
  {
    $participant = Participant::findOrFail($id);
    return response()->json($participant);
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

    $participant = Participant::findOrFail($id);
    $request->validate([
        'name' => 'required|max:255',
        'age' => 'required',
        'dob' => 'required',
        'profession' => 'required',
        'locality' => 'required',
        'number_of_guests' => 'required',
        'address' => 'required'
      ]);

    $participant->name = $request->get('name');
    $participant->age = $request->get('age');
    $participant->dob = $request->get('dob');
    $participant->profession = $request->get('profession');
    $participant->locality = $request->get('locality');
    $participant->number_of_guests = $request->get('number_of_guests');
    $participant->address = $request->get('address');

    $participant->save();

    return response()->json($participant);
  }

  /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
  public function destroy($id)
  {
    $participant = Participant::findOrFail($id);
    $participant->delete();

    return response()->json($participant::all());
  }
}