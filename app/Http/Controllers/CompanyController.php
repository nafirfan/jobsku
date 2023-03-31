<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('company.dashboard', $data);
    }

    public function jobList()
    {
        $data['title'] = 'Job List';
        return view('company.jobList', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        return view('company.profile', $data);
    }

//    public function settings()
//    {
//        $data['title'] = 'Settings';
//        return view('company.settings', $data);
//    }

    public function jobDetails()
    {
        $data['title'] = 'Job Details';
        return view('company.jobDetails', $data);
    }

    public function jobPost()
    {
        $data['title'] = 'jobPost';
        return view('company.jobPost', $data);
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
    public function store(StoreCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
