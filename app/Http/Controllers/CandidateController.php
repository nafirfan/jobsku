<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Candidate;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        return view('candidate.dashboard', $data);
    }

    public function profile(): View
    {
        $data['title'] = 'Profile';
        return view('candidate.profile', $data);
    }

    public function appliedJobs()
    {
        $data['title'] = 'Applied Jobs';
        return view('candidate.appliedJobs', $data);
    }

    public function bookmarkJobs()
    {
        $data['title'] = 'Bookmark Jobs';
        return view('candidate.bookmarkJobs', $data);
    }

//    public function settings()
//    {
//        $data['title'] = 'Settings';
//        return view('candidate.settings', $data);
//    }

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
    public function store(StoreCandidateRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCandidateRequest $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
