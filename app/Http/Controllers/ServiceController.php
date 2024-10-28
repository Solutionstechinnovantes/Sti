<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();

        return view('backend.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
            public function store(Request $request)
        {
            $request->validate([
                'tittlea' => 'required',
                'descriptiona' => 'required',
                'imagea' => 'image',
                'tittleb' => 'required',
                'descriptionb' => 'required',
                'imageb' => 'image',
                'tittlec' => 'required',
                'descriptionc' => 'required',
                'imagec' => 'image',
                'tittled' => 'required',
                'descriptiond' => 'required',
                'imaged' => 'image',
            ]);

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

            if ($request->hasFile('imaged')) {
                $imageD = $request->file('imaged');
                $destinationPathD = 'image/';
                $imageNameD = $imageD->getClientOriginalName();
                $imageD->move($destinationPathD, $imageNameD);
                $input['imaged'] = $imageNameD;
            } else {
                unset($input['imaged']);
            }

            Service::create($input);

            return redirect('/admin/services')->with('message', 'Service added successfully');
        }


    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'tittlea' => 'required',
            'descriptiona' => 'required',
            'imagea' => 'image',
            'tittleb' => 'required',
            'descriptionb' => 'required',
            'imageb' => 'image',
            'tittlec' => 'required',
            'descriptionc' => 'required',
            'imagec' => 'image',
            'tittled' => 'required',
            'descriptiond' => 'required',
            'imaged' => 'image',
        ]);

        $input = $request->all();

        // Gestion des images
        foreach (['imagea', 'imageb', 'imagec', 'imaged'] as $imageField) {
            if ($image = $request->file($imageField)) {
                $destinationPath = 'image/';
                $imageName = $image->getClientOriginalName();
                $image->move($destinationPath, $imageName);
                $input[$imageField] = $imageName;
            } else {
                unset($input[$imageField]);
            }
        }

        $service->update($input);

        return redirect('/admin/services')->with('message', 'Service updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        return redirect('/admin/services')->with('message', 'Service deleted successfully');
    }
}
