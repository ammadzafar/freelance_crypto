<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{
    public function index()
    {
        return view('backend.client.index');
    }

    public function jobSeekers()
    {
        return view('backend.client.job-seekers');
    }

    public function jobSeekerDetail()
    {
        return view('backend.client.job-seeker-detail');
    }
    public function allJobs()
    {
        return view('backend.client.all-jobs');
    }

    public function jobPost()
    {
        return view('backend.client.job.job-post');
    }

    public function jobSkill(Request $request)
    {
//        dd($request->all());
        Session::put('job-description',$request->description);
        return view('backend.client.job.job-skill');
    }

    public function jobScope()
    {
        return view('backend.client.job.job-scope');
    }

    public function jobTime()
    {
        return view('backend.client.job.job-time');
    }

    public function jobRate()
    {
        return view('backend.client.job.job-rate');
    }

    public function jobDetail()
    {
        return view('backend.client.job.job-detail');
    }
}
