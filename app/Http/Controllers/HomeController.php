<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Job Portal';
        return view('home.index', $data);
    }

    public function companyList()
    {
        $data['title'] = 'Company List';
        return view('home.companyList', $data);
    }

    public function companyDetails()
    {
        $data['title'] = 'Company Details';
        return view('home.companyDetails', $data);
    }

    public function jobList()
    {
        $data['title'] = 'Job List';
        return view('home.jobList', $data);
    }

    public function jobDetails()
    {
        $data['title'] = 'Job Details';
        return view('home.jobDetails', $data);
    }

    public function faq()
    {
        $data['title'] = 'FAQ';
        return view('home.faq', $data);
    }

    public function contact()
    {
        $data['title'] = 'Contact';
        return view('home.contact', $data);
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
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Home $home)
    {
        //
    }
}
