<?php

namespace App\Admin\Controllers\Furn;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Projects;

class HomeController extends Controller
{
    public function index()
    {
        $value = Projects::query();
        $projects = $value->where('status', 1)->where('type', 1)->take(4)->get();
        $arrProject = [];
        foreach ($projects as $project) {
            $arrProject[] = [
                'id' => $project->id,
                'title' => $project->title,
                'img' => $project->pictures[0] ?? 'files/img.jpg'
            ];
        };

        $projectHost = Projects::where('status', 1)->where('type', 2)->take(3)->get();
        $arrHot = [];
        foreach ($projectHost as $project) {
            $arrHot[] = [
                'id' => $project->id,
                'title' => $project->title,
                'img' => $project->pictures[0] ?? 'files/img.jpg'
            ];
        };
        return view('furns.index')->with([
            'projects' => $arrProject,
            'hot' => $arrHot
        ]);
    }

    public function aboutus()
    {
        return view('furns.about');
    }

    public function service()
    {
        return view('furns.service');
    }


    public function contact()
    {
        return view('furns.contact');
    }

    public function blog()
    {
        return view('furns.blog');
    }
}
