<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Banners;
use App\Http\Requests\CreateBannersRequest;
use App\Http\Requests\UpdateBannersRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class BannersController extends Controller {

	/**
	 * Display a listing of banners
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $banners = Banners::all();

		return view('admin.banners.index', compact('banners'));
	}

	/**
	 * Show the form for creating a new banners
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.banners.create');
	}

	/**
	 * Store a newly created banners in storage.
	 *
     * @param CreateBannersRequest|Request $request
	 */
	public function store(CreateBannersRequest $request)
	{
		$banner = Banners::orderBy('id','desc')->first();
	    $request = $this->saveFiles($request);
	    $input = $request->all();
	    if ($banner == null) {
	    	$number = 1;
	    }else{
	    	$number = $banner->id+1;
	    }
	    
	    $input['alias'] = 'list-'.$number;

		Banners::create($input);

		return redirect()->route(config('quickadmin.route').'.banners.index');
	}

	/**
	 * Show the form for editing the specified banners.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$banners = Banners::find($id);
	    
	    
		return view('admin.banners.edit', compact('banners'));
	}

	/**
	 * Update the specified banners in storage.
     * @param UpdateBannersRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBannersRequest $request)
	{
		$banners = Banners::findOrFail($id);

        $request = $this->saveFiles($request);

		$banners->update($request->all());

		return redirect()->route(config('quickadmin.route').'.banners.index');
	}

	/**
	 * Remove the specified banners from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Banners::destroy($id);

		return redirect()->route(config('quickadmin.route').'.banners.index');
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
            Banners::destroy($toDelete);
        } else {
            Banners::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.banners.index');
    }

}
