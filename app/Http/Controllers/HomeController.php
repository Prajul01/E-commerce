<?php

namespace App\Http\Controllers;

use App\Http\Controllers\backend\BackendBaseController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends BackendBaseController
{
    protected $route ='home';
    protected $panel ='Dashboard';
    protected $view ='home';
    protected $title;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->title='Home';
//        $data['product']=Product::all();
//        $data['category']=Category::all();
        return view($this->__loadDataToView('frontend.'.$this->route));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $this->title='Admin';
        return view($this->__loadDataToView('backend.adminHome'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
//    public function managerHome()
//    {
//        return view('backend.managerHome');
//    }
}
