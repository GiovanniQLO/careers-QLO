<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = Job::query();

        // Apply job type filter based on request parameter
        if ($request->has('jobType') && !empty($request->jobType)) {
            $query->where('jobType', $request->jobType);
        }

        $filteredJobs = $query->orderBy('id', 'desc')->get();

        // Get all jobs for the different type views
        $jobsAll = Job::orderBy('id', 'desc')->get();
        $jobsLegal = Job::where('jobType', 'Legal')->orderBy('id','desc')->get();
        $jobsTech = Job::where('jobType', 'Tech')->orderBy('id','desc')->get();
        $jobsSupport = Job::where('jobType', 'Support')->orderBy('id','desc')->get();

        return view('jobs', compact('filteredJobs', 'jobsAll', 'jobsLegal', 'jobsTech', 'jobsSupport'));
    }
}
