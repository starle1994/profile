<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ProjectImages;
use App\Http\Requests\CreateProjectImagesRequest;
use App\Http\Requests\UpdateProjectImagesRequest;
use Illuminate\Http\Request;

use App\Projects;


class ProjectImagesController extends Controller {

	/**
	 * Display a listing of projectimages
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $projectimages = ProjectImages::with("projects")->orderBy('id','desc')->get();

		return view('admin.projectimages.index', compact('projectimages'));
	}

	/**
	 * Show the form for creating a new projectimages
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $projects = Projects::pluck("name", "id")->prepend('Please select', null);

	    
	    return view('admin.projectimages.create', compact("projects"));
	}

	/**
	 * Store a newly created projectimages in storage.
	 *
     * @param CreateProjectImagesRequest|Request $request
	 */
	public function store(CreateProjectImagesRequest $request)
	{
	    
		ProjectImages::create($request->all());

		return redirect()->route(config('quickadmin.route').'.projectimages.index');
	}

	/**
	 * Show the form for editing the specified projectimages.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$projectimages = ProjectImages::find($id);
	    $projects = Projects::pluck("name", "id")->prepend('Please select', null);

	    
		return view('admin.projectimages.edit', compact('projectimages', "projects"));
	}

	/**
	 * Update the specified projectimages in storage.
     * @param UpdateProjectImagesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateProjectImagesRequest $request)
	{
		$projectimages = ProjectImages::findOrFail($id);

        

		$projectimages->update($request->all());

		return redirect()->route(config('quickadmin.route').'.projectimages.index');
	}

	/**
	 * Remove the specified projectimages from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ProjectImages::destroy($id);

		return redirect()->route(config('quickadmin.route').'.projectimages.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            ProjectImages::destroy($toDelete);
        } else {
            ProjectImages::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.projectimages.index');
    }

}
