<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\CompanyContact;
use Illuminate\Http\Request;



class CompanyContactController extends Controller {

	/**
	 * Display a listing of companycontact
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $companycontact = CompanyContact::all();

		return view('admin.companycontact.index', compact('companycontact'));
	}

	/**
	 * Show the form for creating a new companycontact
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.companycontact.create');
	}

	/**
	 * Store a newly created companycontact in storage.
	 *
     * @param CreatecompanycontactRequest|Request $request
	 */
	public function store(Request $request)
	{
	    
		CompanyContact::create($request->all());

		return redirect()->route(config('quickadmin.route').'.companycontact.index');
	}

	/**
	 * Show the form for editing the specified companycontact.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$companycontact = CompanyContact::find($id);
	    
	    
		return view('admin.companycontact.edit', compact('companycontact'));
	}

	/**
	 * Update the specified companycontact in storage.
     * @param UpdatecompanycontactRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, Request $request)
	{
		$companycontact = CompanyContact::findOrFail($id);

        

		$companycontact->update($request->all());

		return redirect()->route(config('quickadmin.route').'.companycontact.index');
	}

	/**
	 * Remove the specified companycontact from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		CompanyContact::destroy($id);

		return redirect()->route(config('quickadmin.route').'.companycontact.index');
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
            CompanyContact::destroy($toDelete);
        } else {
            CompanyContact::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.companycontact.index');
    }

}
