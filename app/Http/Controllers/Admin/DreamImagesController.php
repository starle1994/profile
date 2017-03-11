<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\DreamImages;
use App\Http\Requests\CreateDreamImagesRequest;
use App\Http\Requests\UpdateDreamImagesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use App\Dreams;


class DreamImagesController extends Controller {

	/**
	 * Display a listing of dreamimages
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $dreamimages = DreamImages::with("dreams")->orderBy('id','desc')->get();

		return view('admin.dreamimages.index', compact('dreamimages'));
	}

	/**
	 * Show the form for creating a new dreamimages
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $dreams = Dreams::pluck("name", "id")->prepend('Please select', null);

	    
	    return view('admin.dreamimages.create', compact("dreams"));
	}

	/**
	 * Store a newly created dreamimages in storage.
	 *
     * @param CreateDreamImagesRequest|Request $request
	 */
	public function store(CreateDreamImagesRequest $request)
	{
	    $request = $this->saveFiles($request);
		DreamImages::create($request->all());

		return redirect()->route(config('quickadmin.route').'.dreamimages.index');
	}

	/**
	 * Show the form for editing the specified dreamimages.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$dreamimages = DreamImages::find($id);
	    $dreams = Dreams::pluck("name", "id")->prepend('Please select', null);

	    
		return view('admin.dreamimages.edit', compact('dreamimages', "dreams"));
	}

	/**
	 * Update the specified dreamimages in storage.
     * @param UpdateDreamImagesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDreamImagesRequest $request)
	{
		$dreamimages = DreamImages::findOrFail($id);

        $request = $this->saveFiles($request);

		$dreamimages->update($request->all());

		return redirect()->route(config('quickadmin.route').'.dreamimages.index');
	}

	/**
	 * Remove the specified dreamimages from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		DreamImages::destroy($id);

		return redirect()->route(config('quickadmin.route').'.dreamimages.index');
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
            DreamImages::destroy($toDelete);
        } else {
            DreamImages::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.dreamimages.index');
    }

}
