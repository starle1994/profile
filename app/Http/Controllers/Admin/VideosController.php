<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Videos;
use App\Http\Requests\CreateVideosRequest;
use App\Http\Requests\UpdateVideosRequest;
use Illuminate\Http\Request;



class VideosController extends Controller {

	/**
	 * Display a listing of videos
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $videos = Videos::orderBy('id','desc')->get();

		return view('admin.videos.index', compact('videos'));
	}

	/**
	 * Show the form for creating a new videos
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.videos.create');
	}

	/**
	 * Store a newly created videos in storage.
	 *
     * @param CreateVideosRequest|Request $request
	 */
	public function store(CreateVideosRequest $request)
	{
	    
		Videos::create($request->all());

		return redirect()->route(config('quickadmin.route').'.videos.index');
	}

	/**
	 * Show the form for editing the specified videos.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$videos = Videos::find($id);
	    
	    
		return view('admin.videos.edit', compact('videos'));
	}

	/**
	 * Update the specified videos in storage.
     * @param UpdateVideosRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateVideosRequest $request)
	{
		$videos = Videos::findOrFail($id);

        

		$videos->update($request->all());

		return redirect()->route(config('quickadmin.route').'.videos.index');
	}

	/**
	 * Remove the specified videos from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Videos::destroy($id);

		return redirect()->route(config('quickadmin.route').'.videos.index');
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
            Videos::destroy($toDelete);
        } else {
            Videos::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.videos.index');
    }

}
