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
        $myschedule = MySchedule::orderBy('id','desc')->get();
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
		for ($i=1; $i <=6 ; $i++) { 
			$name_event = 'name_event'.$i;
			$start_time = 'start_time'.$i;
			$end_time   = 'end_time'.$i;
			$color 		= 'color'.$i;
			if($request->$name_event != null && $request->$start_time != null) {
				MySchedule::create(['name_event'=>$request->$name_event,
          		'start_time'=>$request->$start_time,
          		'end_time'=>null,
             	'color'=>$request->$color]);
			}
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