<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();

        return view('backend.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)

     {

        $request->validate([
        'tittlea'=>'required',
        'descriptiona'=>'required',
        'imagea'=>'image',
        'fba'=>'required',
        'twa'=>'required',
        'ina'=>'required',
        'linka'=>'required',
        'gita'=>'required',
        'tittleb'=>'required',
        'descriptionb'=>'required',
        'imageb'=>'image',
        'fbb'=>'required',
        'twb'=>'required',
        'inb'=>'required',
        'linkb'=>'required',
        'gitb'=>'required',
        'tittlec'=>'required',
        'descriptionc'=>'required',
        'imagec'=>'image',
        'fbc'=>'required',
        'twc'=>'required',
        'inc'=>'required',
        'linkc'=>'required',
        'gitc'=>'required',]);

        $input = $request->all();

        // Gestion des images

        if ($request->hasFile('imagea')) {
            $imageA = $request->file('imagea');
            $destinationPathA = 'image/';
            $imageNameA = $imageA->getClientOriginalName();
            $imageA->move($destinationPathA, $imageNameA);
            $input['imagea'] = $imageNameA;
        }   else {
            unset($input['imagea']);
        }

        if ($request->hasFile('imageb')) {
            $imageB = $request->file('imageb');
            $destinationPathB = 'image/';
            $imageNameB = $imageB->getClientOriginalName();
            $imageB->move($destinationPathB, $imageNameB);
            $input['imageb'] = $imageNameB;
        } else {
            unset($input['imageb']);
        }

        if ($request->hasFile('imagec')) {
            $imageC = $request->file('imagec');
            $destinationPathC = 'image/';
            $imageNameC = $imageC->getClientOriginalName();
            $imageC->move($destinationPathC, $imageNameC);
            $input['imagec'] = $imageNameC;
        } else {
            unset($input['imagec']);
        }
    

        Team::create($input);

        return redirect('/admin/teams')->with('message','Team updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect('/admin/teams')->with('message','Team deleted successfully');
    }
}
