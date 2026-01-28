<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    /**
     * Display the apps manage page.
     */
    public function manage()
    {
        return view('apps.manage');
    }

    /**
     * Display the projects grid view.
     */
    public function projectsGrid()
    {
        return view('apps.projects.grid');
    }

    /**
     * Display project details.
     */
    public function projectsDetails($id = 1)
    {
        return view('apps.projects.details', compact('id'));
    }
}
