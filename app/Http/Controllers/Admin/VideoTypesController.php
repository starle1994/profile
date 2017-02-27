<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\VideoTypes;
use App\Http\Requests\CreateVideoTypesRequest;
use App\Http\Requests\UpdateVideoTypesRequest;
use Illuminate\Http\Request;



class VideoTypesController extends Controller {

	/**
	 * Display a listing of videotypes
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $videotypes = VideoTypes::all();

		return view('admin.videotypes.index', compact('videotypes'));
	}

	/**
	 * Show the form for creating a new videotypes
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.videotypes.create');
	}

	/**
	 * Store a newly created videotypes in storage.
	 *
     * @param CreateVideoTypesRequest|Request $request
	 */
	public function store(CreateVideoTypesRequest $request)
	{
	    
		VideoTypes::create($request->all());

		return redirect()->route(config('quickadmin.route').'.videotypes.index');
	}

	/**
	 * Show the form for editing the specified videotypes.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$videotypes = VideoTypes::find($id);
	    
	    
		return view('admin.videotypes.edit', compact('videotypes'));
	}

	/**
	 * Update the specified videotypes in storage.
     * @param UpdateVideoTypesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateVideoTypesRequest $request)
	{
		$videotypes = VideoTypes::findOrFail($id);

        

		$videotypes->update($request->all());

		return redirect()->route(config('quickadmin.route').'.videotypes.index');
	}

	/**
	 * Remove the specified videotypes from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		VideoTypes::destroy($id);

		return redirect()->route(config('quickadmin.route').'.videotypes.index');
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
            VideoTypes::destroy($toDelete);
        } else {
            VideoTypes::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.videotypes.index');
    }

}
