<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CompanyImages;
use App\Http\Requests\CreateCompanyImagesRequest;
use App\Http\Requests\UpdateCompanyImagesRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;
use Image;

class CompanyImagesController extends Controller {

	/**
	 * Display a listing of companyimages
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $companyimages = CompanyImages::all();

		return view('admin.companyimages.index', compact('companyimages'));
	}

	/**
	 * Show the form for creating a new companyimages
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.companyimages.create');
	}

	/**
	 * Store a newly created companyimages in storage.
	 *
     * @param CreateCompanyImagesRequest|Request $request
	 */
	public function store(CreateCompanyImagesRequest $request)
	{
		$image = $request->file('file');
        $name  = $request->get('name');
        $description = $request->get('description');

        $input['imagename'] = time().'-'.$image->getClientOriginalName();
        $destinationPath = public_path('uploads/thumb');
        $img = Image::make($image->getRealPath());
        $img->resize(400, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
        $destinationPath = public_path('uploads');
            $image->move($destinationPath, $input['imagename']);

        CompanyImages::create(['image'=>$input['imagename'],
                                'name'=>$name,
                                'description' =>$description
                            ]);
		return response()->json(['success'=>$input['imagename']]);


	}

	/**
	 * Show the form for editing the specified companyimages.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$companyimages = CompanyImages::find($id);
	    
	    
		return view('admin.companyimages.edit', compact('companyimages'));
	}

	/**
	 * Update the specified companyimages in storage.
     * @param UpdateCompanyImagesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCompanyImagesRequest $request)
	{
		$companyimages = CompanyImages::findOrFail($id);

        $request = $this->saveFiles($request);

		$companyimages->update($request->all());

		return redirect()->route(config('quickadmin.route').'.companyimages.index');
	}

	/**
	 * Remove the specified companyimages from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		CompanyImages::destroy($id);

		return redirect()->route(config('quickadmin.route').'.companyimages.index');
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
            CompanyImages::destroy($toDelete);
        } else {
            CompanyImages::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.companyimages.index');
    }

}
