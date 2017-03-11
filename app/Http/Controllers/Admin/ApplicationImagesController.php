<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\ApplicationImages;
use App\Http\Requests\CreateApplicationImagesRequest;
use App\Http\Requests\UpdateApplicationImagesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Applications;


class ApplicationImagesController extends Controller {

	/**
	 * Display a listing of applicationimages
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $applicationimages = ApplicationImages::with("applications")->orderBy('id','desc')->get();

		return view('admin.applicationimages.index', compact('applicationimages'));
	}

	/**
	 * Show the form for creating a new applicationimages
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $applications = Applications::pluck("name", "id")->prepend('Please select', null);

	    return view('admin.applicationimages.create', compact("applications"));
	}

	/**
	 * Store a newly created applicationimages in storage.
	 *
     * @param CreateApplicationImagesRequest|Request $request
	 */
	public function store(CreateApplicationImagesRequest $request)
	{
	    $request = $this->saveFiles($request);
		ApplicationImages::create($request->all());

		return redirect()->route(config('quickadmin.route').'.applicationimages.index');
	}

	/**
	 * Show the form for editing the specified applicationimages.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$applicationimages = ApplicationImages::find($id);
	    $applications = Applications::pluck("name", "id")->prepend('Please select', null);

	    
		return view('admin.applicationimages.edit', compact('applicationimages', "applications"));
	}

	/**
	 * Update the specified applicationimages in storage.
     * @param UpdateApplicationImagesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateApplicationImagesRequest $request)
	{
		$applicationimages = ApplicationImages::findOrFail($id);

        $request = $this->saveFiles($request);

		$applicationimages->update($request->all());

		return redirect()->route(config('quickadmin.route').'.applicationimages.index');
	}

	/**
	 * Remove the specified applicationimages from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		ApplicationImages::destroy($id);

		return redirect()->route(config('quickadmin.route').'.applicationimages.index');
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
            ApplicationImages::destroy($toDelete);
        } else {
            ApplicationImages::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.applicationimages.index');
    }

}
