<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Dreams;
use App\Http\Requests\CreateDreamsRequest;
use App\Http\Requests\UpdateDreamsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class DreamsController extends Controller {

	/**
	 * Display a listing of dreams
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $dreams = Dreams::all();

		return view('admin.dreams.index', compact('dreams'));
	}

	/**
	 * Show the form for creating a new dreams
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.dreams.create');
	}

	/**
	 * Store a newly created dreams in storage.
	 *
     * @param CreateDreamsRequest|Request $request
	 */
	public function store(CreateDreamsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Dreams::create($request->all());

		return redirect()->route(config('quickadmin.route').'.dreams.index');
	}

	/**
	 * Show the form for editing the specified dreams.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$dreams = Dreams::find($id);
	    
	    
		return view('admin.dreams.edit', compact('dreams'));
	}

	/**
	 * Update the specified dreams in storage.
     * @param UpdateDreamsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDreamsRequest $request)
	{
		$dreams = Dreams::findOrFail($id);

        $request = $this->saveFiles($request);

		$dreams->update($request->all());

		return redirect()->route(config('quickadmin.route').'.dreams.index');
	}

	/**
	 * Remove the specified dreams from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Dreams::destroy($id);

		return redirect()->route(config('quickadmin.route').'.dreams.index');
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
            Dreams::destroy($toDelete);
        } else {
            Dreams::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.dreams.index');
    }

}
