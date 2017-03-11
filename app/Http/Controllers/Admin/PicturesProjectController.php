<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\PicturesProject;
use App\Http\Requests\CreatePicturesProjectRequest;
use App\Http\Requests\UpdatePicturesProjectRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Projects;


class PicturesProjectController extends Controller {

	/**
	 * Display a listing of picturesproject
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $picturesproject = PicturesProject::with("projects")->orderBy('id','desc')->get();

		return view('admin.picturesproject.index', compact('picturesproject'));
	}

	/**
	 * Show the form for creating a new picturesproject
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $projects = Projects::pluck("name", "id")->prepend('Please select', null);

	    
	    return view('admin.picturesproject.create', compact("projects"));
	}

	/**
	 * Store a newly created picturesproject in storage.
	 *
     * @param CreatePicturesProjectRequest|Request $request
	 */
	public function store(CreatePicturesProjectRequest $request)
	{
	    $request = $this->saveFiles($request);
		PicturesProject::create($request->all());

		return redirect()->route(config('quickadmin.route').'.picturesproject.index');
	}

	/**
	 * Show the form for editing the specified picturesproject.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$picturesproject = PicturesProject::find($id);
	    $projects = Projects::pluck("name", "id")->prepend('Please select', null);

	    
		return view('admin.picturesproject.edit', compact('picturesproject', "projects"));
	}

	/**
	 * Update the specified picturesproject in storage.
     * @param UpdatePicturesProjectRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePicturesProjectRequest $request)
	{
		$picturesproject = PicturesProject::findOrFail($id);

        $request = $this->saveFiles($request);

		$picturesproject->update($request->all());

		return redirect()->route(config('quickadmin.route').'.picturesproject.index');
	}

	/**
	 * Remove the specified picturesproject from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		PicturesProject::destroy($id);

		return redirect()->route(config('quickadmin.route').'.picturesproject.index');
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
            PicturesProject::destroy($toDelete);
        } else {
            PicturesProject::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.picturesproject.index');
    }

}
