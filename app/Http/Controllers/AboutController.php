<?php
namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();
        return view('backend.about.about', compact('about'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }


    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $about = About::find($id);

    $request->validate([
        'axea' => 'required',
        'axeb' => 'required',
        'axec' => 'required',
        'axed' => 'required',
        'titlea' => 'required',
        'titleb' => 'required',
        'titlec' => 'required',
        'titled' => 'required',
        'subtitlea' => 'required',
        'subtitleb' => 'required',
        'subtitlec' => 'required',
        'subtitled' => 'required',
        'descriptiona' => 'required',
        'descriptionb' => 'required',
        'descriptionc' => 'required',
        'descriptiond' => 'required',
        'icon_imagea' => 'image',
        'icon_imageb' => 'image',
        'icon_imagec' => 'image',
        'icon_imaged' => 'image',
    ]);

    $input = $request->all();

    // Gestion des images
    if ($request->hasFile('icon_imagea')) {
        $imageA = $request->file('icon_imagea');
        $destinationPathA = 'image/';
        $imageNameA = $imageA->getClientOriginalName();
        $imageA->move($destinationPathA, $imageNameA);
        $input['icon_imagea'] = $imageNameA;
    }   else {
        unset($input['icon_imagea']);
    }

    if ($request->hasFile('icon_imageb')) {
        $imageB = $request->file('icon_imageb');
        $destinationPathB = 'image/';
        $imageNameB = $imageB->getClientOriginalName();
        $imageB->move($destinationPathB, $imageNameB);
        $input['icon_imageb'] = $imageNameB;
    } else {
        unset($input['icon_imageb']);
    }

    if ($request->hasFile('icon_imagec')) {
        $imageC = $request->file('icon_imagec');
        $destinationPathC = 'image/';
        $imageNameC = $imageC->getClientOriginalName();
        $imageC->move($destinationPathC, $imageNameC);
        $input['icon_imagec'] = $imageNameC;
    } else {
        unset($input['icon_imagec']);
    }

    if ($request->hasFile('icon_imaged')) {
        $imageD = $request->file('icon_imaged');
        $destinationPathD = 'image/';
        $imageNameD = $imageD->getClientOriginalName();
        $imageD->move($destinationPathD, $imageNameD);
        $input['icon_imaged'] = $imageNameD;
    } else {
        unset($input['icon_imaged']);
    }

    $about->update($input);

    return redirect('/admin/abouts')->with('message', 'About updated successfully');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {

    }
}
