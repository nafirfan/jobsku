<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactUsRequest;
use App\Http\Requests\UpdateContactUsRequest;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreContactUsRequest $request)
    {
        $input = $request->all();

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'noHp' => 'required',
            // 'company' => '',
            'pesan' => 'required',
        ]);

        ContactUs::create($input);
        // return back()->with('success', 'Message has been sent successfully!');
        return redirect()->route('home.contact')->with('success', 'Message has been sent successfully!');
        // return redirect('home.contact');
        // return Redirect::route('home.contact')->with('success', 'Message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactUsRequest $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs)
    {
        //
    }
}
