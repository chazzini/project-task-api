<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FileRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Illuminate\Http\Request;


class FilesController extends Controller
{
    public function store(FileRequest $request)
    {
        $project = Project::findorFail($request->project_id);
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs('/public', $filename);
        $project->image = $filename;
        $project->save();
        return new ProjectResource($project);
    }
}
