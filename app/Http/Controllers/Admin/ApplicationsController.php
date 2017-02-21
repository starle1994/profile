<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Applications;
use App\Http\Requests\CreateApplicationsRequest;
use App\Http\Requests\UpdateApplicationsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class ApplicationsController extends Controller {

	/**
	 * Display a listing of applications
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $applications = Applications::all();

		return view('admin.applications.index', compact('applications'));
	}

	/**
	 * Show the form for creating a new applications
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.applications.create');
	}

	/**
	 * Store a newly created applications in storage.
	 *
     * @param CreateApplicationsRequest|Request $request
	 */
	public function store(CreateApplicationsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Applications::create($request->all());

		return redirect()->route(config('quickadmin.route').'.applications.index');
	}

	/**
	 * Show the form for editing the specified applications.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$applications = Applications::find($id);
	    
	    
		return view('admin.applications.edit', compact('applications'));
	}

	/**
	 * Update the specified applications in storage.
     * @param UpdateApplicationsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateApplicationsRequest $request)
	{
		$applications = Applications::findOrFail($id);

        $request = $this->saveFiles($request);

		$applications->update($request->all());

		return redirect()->route(config('quickadmin.route').'.applications.index');
	}

	/**
	 * Remove the specified applications from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Applications::destroy($id);

		return redirect()->route(config('quickadmin.route').'.applications.index');
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
            Applications::destroy($toDelete);
        } else {
            Applications::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.applications.index');
    }

}
