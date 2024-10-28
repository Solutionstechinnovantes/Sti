<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller // Replaced AboutController with ContactController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Récupérer le premier contact
    $contact = Contact::first();

    // Vérifier si le contact existe
    if (!$contact) {
        abort(404); // Ou gérer de manière appropriée s'il n'y a pas de contact trouvé
    }

    return view('backend.contact.contact', compact('contact'));
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $contact = Contact::find($id);


        $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'image',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'maps_embed' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('logo')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['logo'] = $imageName;
        } else {
            unset($input['logo']);
        }

        $contact->update($input);
        return redirect('/admin/contact')->with('message', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

