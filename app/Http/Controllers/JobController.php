<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Job List';
        $data['data'] = Job::all();
        return view('company.jobList', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['title'] = 'Job Post';
        $data['data'] = '';
        return view('company.jobPost', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $idUser = auth()->id();
        $idCompany = DB::table('companies')->where('user_id', $idUser)->select('id')->get();
        $uuid = Str::uuid()->toString();

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'vacancy' => 'required',
            'salary_min' => 'required',
            'salary_max' => 'required',
            'type' => 'required',
            'year_of_experience' => 'required',
            'location' => 'required',
            'expiration_pub' => 'required',
            'educational_req' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'responsibilities' => 'required',
        ]);

        $job = Job::create([
            'id' => $uuid,
            'name' => $request->name,
            'category' => $request->category,
            'vacancy' => $request->vacancy,
            'salary_min' => $request->salary_min,
            'salary_max' => $request->salary_max,
            'type' => $request->type,
            'year_of_experience' => $request->year_of_experience,
            'location' => $request->location,
            'expiration_pub' => Carbon::createFromFormat('d/m/Y', $request->expiration_pub),
            'educational_req' => $request->educational_req,
            'gender' => $request->gender,
            'description' => $request->description,
            'responsibilities' => $request->responsibilities,
            'user_id' => $idUser,
            'companies_id' => $idCompany[0]->id,
        ]);
        return redirect()->route('job.index')->with('success', 'Job has been posted!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['title'] = 'Job Details';
        $data['data'] = DB::table('jobs')->join('companies', 'jobs.companies_id', '=', 'companies.id')->where('jobs.name', $id)->get();
        return view('company.jobDetails', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['title'] = 'Job Post Edit';
        $data['data'] = DB::table('jobs')->join('companies', 'jobs.companies_id', '=', 'companies.id')->where('jobs.name', $id)->first();
        return view('company.jobEdit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
