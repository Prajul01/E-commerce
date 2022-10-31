<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontendBaseController extends Controller
{
    protected function __loadDataToView($viewPath)
    {
        view()->composer($viewPath, function ($view) {
            $view->with('title',$this->title);
//            $view->with('route', $this->route);
        });
        return $viewPath;
    }
}
