<?php

namespace App\Admin\Controllers\Furn;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\General;
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
        $reason = General::where('status', 1)->where('type', General::LY_DO)->first();
        return view('furns.index')->with([
            'projects' => $arrProject,
            'hot' => $arrHot,
            'reason' => $reason
        ]);
    }

    public function aboutus()
    {
        $introduce = General::where('status', 1)->where('type', General::GIOI_THIEU)->first();
        $reason = General::where('status', 1)->where('type', General::LY_DO)->first();
        return view('furns.about', with([
            'introduce' => $introduce,
            'reason' => $reason,
        ]));
    }

    public function service()
    {
        $service = General::where('status', 1)->where('type', General::DICH_VU)->get();
        return view('furns.service', compact('service'));
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
