<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class BackendBaseController extends Controller
{
    protected function __loadDataToView($viewPath)
    {
        view()->composer($viewPath, function ($view) {
            $view->with('route', $this->route);
            $view->with('panel', $this->panel);
            $view->with('view',$this->view);
            $view->with('title',$this->title);
        });
        return $viewPath;
    }

}
