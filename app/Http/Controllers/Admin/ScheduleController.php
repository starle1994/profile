<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Schedule;
use App\Http\Requests\CreateScheduleRequest;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Http\Request;



class ScheduleController extends Controller {

	/**
	 * Display a listing of schedule
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $schedule = Schedule::all();

		return view('admin.schedule.index', compact('schedule'));
	}

	/**
	 * Show the form for creating a new schedule
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.schedule.create');
	}

	/**
	 * Store a newly created schedule in storage.
	 *
     * @param CreateScheduleRequest|Request $request
	 */
	public function store(CreateScheduleRequest $request)
	{
	    
		Schedule::create($request->all());

		return redirect()->route(config('quickadmin.route').'.schedule.index');
	}

	/**
	 * Show the form for editing the specified schedule.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$schedule = Schedule::find($id);
	    
	    
		return view('admin.schedule.edit', compact('schedule'));
	}

	/**
	 * Update the specified schedule in storage.
     * @param UpdateScheduleRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateScheduleRequest $request)
	{
		$schedule = Schedule::findOrFail($id);

        

		$schedule->update($request->all());

		return redirect()->route(config('quickadmin.route').'.schedule.index');
	}

	/**
	 * Remove the specified schedule from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Schedule::destroy($id);

		return redirect()->route(config('quickadmin.route').'.schedule.index');
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
            Schedule::destroy($toDelete);
        } else {
            Schedule::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.schedule.index');
    }

}
