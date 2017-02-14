<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\MyVideos;
use App\Http\Requests\CreateMyVideosRequest;
use App\Http\Requests\UpdateMyVideosRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class MyVideosController extends Controller {

	/**
	 * Display a listing of myvideos
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $myvideos = MyVideos::all();

		return view('admin.myvideos.index', compact('myvideos'));
	}

	/**
	 * Show the form for creating a new myvideos
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.myvideos.create');
	}

	/**
	 * Store a newly created myvideos in storage.
	 *
     * @param CreateMyVideosRequest|Request $request
	 */
	public function store(CreateMyVideosRequest $request)
	{
	    $request = $this->saveFiles($request);
		MyVideos::create($request->all());

		return redirect()->route(config('quickadmin.route').'.myvideos.index');
	}

	/**
	 * Show the form for editing the specified myvideos.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$myvideos = MyVideos::find($id);
	    
	    
		return view('admin.myvideos.edit', compact('myvideos'));
	}

	/**
	 * Update the specified myvideos in storage.
     * @param UpdateMyVideosRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMyVideosRequest $request)
	{
		$myvideos = MyVideos::findOrFail($id);

        $request = $this->saveFiles($request);

		$myvideos->update($request->all());

		return redirect()->route(config('quickadmin.route').'.myvideos.index');
	}

	/**
	 * Remove the specified myvideos from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		MyVideos::destroy($id);

		return redirect()->route(config('quickadmin.route').'.myvideos.index');
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
            MyVideos::destroy($toDelete);
        } else {
            MyVideos::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.myvideos.index');
    }

}
