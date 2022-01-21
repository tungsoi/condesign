<?php

namespace App\Admin\Controllers\Furn;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::where('status', 1)->where('type', 1)->get();
        $arrPr = [];
        foreach ($projects as $pr) {
            $arrPr[] = [
                'id' => $pr->id,
                'title' => $pr->title,
                'img' =>  $pr->pictures[0] ?? 'files/img.jpg'
            ];
        };
        // dd($arrPr);
        $data = $this->paginate($arrPr);
        return view('furns.product-list', compact('data'));
    }

    public function paginate($items, $perPage = 8, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function show($id)
    {
        $project = Projects::find($id);
        return view('furns.product-detail', compact('project'));
    }
}
