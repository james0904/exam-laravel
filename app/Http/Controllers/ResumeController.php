<?php

namespace App\Http\Controllers;

use App\Models\Resume;

class ResumeController extends Controller
{
    public function show()
    {
        // Assuming you have only one resume entry in the database
        $resume = Resume::first();

        return view('welcome', compact('resume'));
    }
}
