<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\App;
use App\Http\Requests\CreateAppRequest;
use App\Http\Requests\UpdateAppRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class AppController extends Controller {

	/**
	 * Display a listing of app
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $app = App::orderBy('id','desc')->get();

		return view('admin.app.index', compact('app'));
	}

	/**
	 * Show the form for creating a new app
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.app.create');
	}

	/**
	 * Store a newly created app in storage.
	 *
     * @param CreateAppRequest|Request $request
	 */
	public function store(CreateAppRequest $request)
	{
	    $banner = App::orderBy('id','desc')->first();
	    $request = $this->saveFiles($request);
		$input = $request->all();
		if ($banner == null) {
	    	$number = 1;
	    }else{
	    	$number = $banner->id+1;
	    }

	    $input['alias'] = 'list-'.$number;

	    App::create($input);

		return redirect()->route(config('quickadmin.route').'.app.index');
	}

	/**
	 * Show the form for editing the specified app.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$app = App::find($id);
	    
	    
		return view('admin.app.edit', compact('app'));
	}

	/**
	 * Update the specified app in storage.
     * @param UpdateAppRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateAppRequest $request)
	{
		$app = App::findOrFail($id);

        $request = $this->saveFiles($request);

		$app->update($request->all());

		return redirect()->route(config('quickadmin.route').'.app.index');
	}

	/**
	 * Remove the specified app from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		App::destroy($id);

		return redirect()->route(config('quickadmin.route').'.app.index');
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
            App::destroy($toDelete);
        } else {
            App::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.app.index');
    }

}
