<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\MySchedule;
use App\Http\Requests\CreateMyScheduleRequest;
use App\Http\Requests\UpdateMyScheduleRequest;
use Illuminate\Http\Request;



class MyScheduleController extends Controller {

	/**
	 * Display a listing of myschedule
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $myschedule = MySchedule::all();
		return view('admin.myschedule.index', compact('myschedule'));
	}

	/**
	 * Show the form for creating a new myschedule
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.myschedule.create');
	}

	/**
	 * Store a newly created myschedule in storage.
	 *
     * @param CreateMyScheduleRequest|Request $request
	 */
	public function store(CreateMyScheduleRequest $request)
	{
	  if ($request->end_time == null) {
	  	MySchedule::create(['name_event'=>$request->name_event,
          'start_time'=>$request->start_time,
          'end_time'=> $en
          'color'=>$request->color]);
	  }else{
	  	MySchedule::create($request->all());

	  }
		

		return redirect()->route(config('quickadmin.route').'.myschedule.index');
	}

	/**
	 * Show the form for editing the specified myschedule.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$myschedule = MySchedule::find($id);
	    
	    
		return view('admin.myschedule.edit', compact('myschedule'));
	}

	/**
	 * Update the specified myschedule in storage.
     * @param UpdateMyScheduleRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateMyScheduleRequest $request)
	{
		$myschedule = MySchedule::findOrFail($id);

        

		$myschedule->update($request->all());

		return redirect()->route(config('quickadmin.route').'.myschedule.index');
	}

	/**
	 * Remove the specified myschedule from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		MySchedule::destroy($id);

		return redirect()->route(config('quickadmin.route').'.myschedule.index');
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
            MySchedule::destroy($toDelete);
        } else {
            MySchedule::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.myschedule.index');
    }

}
