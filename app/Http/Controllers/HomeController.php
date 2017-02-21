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

        $categories = Category::where('actived', 1)->get();
        $baners = Banners::all();
        $company_images = CompanyImages::take(5)->orderBy('id','desc')->get();
        $videos = Videos::take(5)->orderBy('id','desc')->get();
        $schedules = Schedule::orderBy('id', 'desc')->first();
        $new_blog = Blogs::take(3)->orderBy('id','desc')->get();
        $new_blog2 = [];
        if ($new_blog->isEmpty() == false) {
            $new_blog2 = Blogs::limit(2)->offset($new_blog[0]->id-5)->orderBy('id','desc')->get();
        }
        $business = Blogs::limit(4)->orderBy('id','desc')->where('cate_id',6)->get();
        $food = Blogs::limit(3)->orderBy('id','desc')->where('cate_id',7)->get();
        $fashion = Blogs::limit(3)->orderBy('id','desc')->where('cate_id',8)->get();
        $apps = App::all();
        $projects = Projects::limit(6)->orderBy('id','desc')->with('images')->get();

        return view('welcome', compact('categories', 'baners', 'company_images', 'videos', 'schedules','new_blog','new_blog2','business','food', 'fashion','apps','projects'));
    }

    public function showCompanyImage()
    {
        $categories = Category::where('actived', 1)->get();
        $company_images = CompanyImages::orderBy('id','desc')->get();
        return view('pages.image', compact('categories', 'baners', 'company_images'));
    }

    public function showBlog()
    {
        $categories = Category::where('actived', 1)->get();
        $new_blog = Blogs::orderBy('id','desc')->paginate(10);
        return view('pages.blog', compact('categories','new_blog'));
    }

    public function showBlogdetail($alias)
    {
        $categories = Category::where('actived', 1)->get();
     
        $get_blog = Blogs::where('alias',$alias)->first();
        $cate = [];
        if ($get_blog != null) {
            $cate = Category::where('id',$get_blog->cate_id)->first();
        }
        $recent_post = Blogs::orderBy('id','desc')->where('cate_id',$cate->id)->take(10)->get();

        return view('pages.blog_detail', compact('categories','get_blog', 'cate', 'recent_post'));
    }

    public function contact()
    {
        $categories = Category::where('actived', 1)->get();
        return view('pages.contact',compact('categories'));
    }

    public function showVideo()
    {
        $categories = Category::where('actived', 1)->get();
        $videos = Videos::take(5)->orderBy('id','desc')->get();
        $schedules = Schedule::orderBy('id', 'desc')->first();
        return view('pages.videos',compact('categories','videos', 'schedules'));
    }

    public function showAppdetail($alias)
    {
        $categories = Category::where('actived', 1)->get();
        $banner = App::where('alias', $alias)->first();
        return view('pages.app_detail',compact('categories','banner','images'));
    }

    public function showApp()
    {
        $apps = App::paginate(10);
        $categories = Category::where('actived', 1)->get();
        return view('pages.view_app', compact('apps','categories'));
    }
     public function ourDream()
     {
        $categories = Category::where('actived', 1)->get();
        $dreams = Dreams::all();
        return view('pages.our-dream', compact('categories','dreams'));
     }

     public function dreamDetail($alias)
     {
        $categories = Category::where('actived', 1)->get();
        $dreams = Dreams::where('alias', $alias)->first();
        $dreams_image = DreamImages::where('dreams_id', $dreams->id)->take(4)->get();
        return view('pages.dream_detail',compact('categories','dreams','dreams_image'));
     }

     public function showProject()
     {
         $categories = Category::where('actived', 1)->get();
        $projects = Projects::all();
        return view('pages.project', compact('categories','projects'));
     }

      public function showProjectDetail($alias)
     {
        $categories = Category::where('actived', 1)->get();
        $projects = Projects::where('alias', $alias)->first();
        $projects_image = PicturesProject::where('projects_id', $projects->id)->take(4)->get();
        return view('pages.project_images',compact('categories','projects','projects_image'));
     }

}
