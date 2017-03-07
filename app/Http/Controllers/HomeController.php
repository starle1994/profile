<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Banners;
use App\CompanyImages;
use App\Videos;
use App\Schedule;
use App\Blogs;
use App\App;
use App\ApplicationImages;
use App\Projects;
use App\Dreams;
use App\DreamImages;
use App\PicturesProject;
use Response;
use App\VideoTypes;
use App\MySchedule;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $baners = Banners::all();
      
   
       for ($i=0; $i <= 9;  $i = $i +3) { 
      
           $company_images[$i] = CompanyImages::limit(3)->offset($i)->orderBy('id','desc')->get();
           $blogs[$i] = Blogs::limit(3)->offset($i)->orderBy('id','desc')->get();
       }

        for ($i=0; $i <= 8;  $i = $i +2) { 
           $projects[$i] = Projects::limit(3)->offset($i)->orderBy('id','desc')->with('images')->get();
       }

        $video_types = VideoTypes::all();
        foreach ($video_types as $data) {
            $videos[$data->name] = Videos::orderBy('id','desc')->where('video_type', $data->id)->paginate(4);
        }
        $schedules = Schedule::orderBy('id', 'desc')->get();

        $catego= Category::where('actived', null)->get();

        $apps = App::all();
        

        return view('welcome', compact('categories', 'baners', 'company_images', 'videos', 'schedules','blogs','apps','projects'));
    }

    public function showCompanyImage()
    {
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $company_images = CompanyImages::orderBy('id','desc')->paginate(20);
         $apps = App::all();
        return view('pages.image', compact('categories', 'baners','apps', 'company_images'));
    }

    public function showBlog()
    {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $new_blog = Blogs::orderBy('id','desc')->paginate(10);
        $blogs_cate = Category::where('actived', NULL)->orderBy('id','desc')->get();
        return view('pages.blog', compact('categories','new_blog','apps','blogs_cate'));
    }

    public function showBlogdetail($alias)
    {
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
      $apps = App::all();
        $get_blog = Blogs::where('alias',$alias)->first();
        $cate = [];
        if ($get_blog != null) {
            $cate = Category::where('id',$get_blog->cate_id)->first();
        }
        $recent_post = Blogs::orderBy('id','desc')->where('cate_id',$cate->id)->take(10)->get();

        return view('pages.blog_detail', compact('categories','get_blog', 'cate', 'recent_post','apps'));
    }

    public function contact()
    {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        return view('pages.contact',compact('categories','apps'));
    }

    public function showVideo()
    {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        
        $schedules = Schedule::orderBy('id', 'desc')->first();
        $video_types = VideoTypes::all();
        foreach ($video_types as $data) {
            $videos[$data->name] = Videos::orderBy('id','desc')->where('video_type', $data->id)->paginate(6);
        }

        return view('pages.videos',compact('categories','videos', 'schedules','apps'));
    }

    public function showCategoriesVideo($id)
    {
        $videos[$data->name] = Videos::orderBy('id','desc')->where('video_type', $id)->paginate(6);
    }

    public function showAppdetail($alias)
    {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $banner = App::where('alias', $alias)->first();
        return view('pages.app_detail',compact('categories','banner','images','apps'));
    }

    public function showApp()
    {
       $apps = App::all();
        $apps = App::paginate(10);
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        return view('pages.view_app', compact('apps','categories','apps'));
    }
     public function ourDream()
     {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $dreams = Dreams::all();
        return view('pages.our-dream', compact('categories','dreams','apps'));
     }

     public function dreamDetail($alias)
     {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $dreams = Dreams::where('alias', $alias)->first();
        $dreams_image = DreamImages::where('dreams_id', $dreams->id)->take(4)->get();
        return view('pages.dream_detail',compact('categories','dreams','dreams_image','apps'));
     }

     public function showProject()
     {
       $apps = App::all();
        $schedules = Schedule::orderBy('id', 'desc')->first();
         $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $projects = Projects::all();
        return view('pages.project', compact('categories','projects','apps','schedules'));
     }

      public function showProjectDetail($alias)
     {
       $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        $projects = Projects::where('alias', $alias)->first();
        $projects_image = PicturesProject::where('projects_id', $projects->id)->take(4)->get();
        return view('pages.project_images',compact('categories','projects','projects_image','apps'));
     }

     public function getBanner(Request $request)
     {
         $id = $request->id;
         $data = App::where('id', $id)->first();
         $route = route('show.app.detail',$data->alias);
         $src = asset('uploads/'.$data->banner);
         $result = [
            'route' => $route,
            'src'=>$src
         ];
    
        return Response::json($result);
     }

     public function showDetaiCalander($value='')
     {
         $events = [];
         $schedules = MySchedule::all();
        foreach ($schedules as $schedule) {
             if ($schedule->end_time == NULL) {
                    $all_day = true;
                    $start_time = new \DateTime($schedule->start_time);
                    $end_time = new \DateTime($schedule->start_time);
                }else{
                    $all_day = false;
                    $start_time = new \DateTime($schedule->start_time);
                    $end_time = new \DateTime($schedule->end_time);
                }

             $events[] = \Calendar::event(
               
                $schedule->name_event, //event title
                $all_day, //full day event?
                $start_time, //start time (you can also use Carbon instead of DateTime)
                $end_time, //end time (you can also use Carbon instead of DateTime
                'stringEventId',
                ['color'=> $schedule->color] ,
                ['imageurl'=>'http://localhost/profile/public/uploads/1487932237.jpg']//optionally, you can specify an event ID
            );
        }
       


        $calendar = \Calendar::addEvents($events) //add an array with addEvents

            ->setOptions([ //set fullcalendar options
                'firstDay' => 1
            ]); 
        $apps = App::all();
        $categories = Category::where('actived', 1)->orderBy('id','desc')->get();
        return view('pages.schedule', compact('calendar','apps','categories'));
     }
}
