<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuscriberRequest;
use App\Models\Banner;
use App\Models\Suscribers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SuscribersController extends BackendBaseController
{
    protected $route ='suscribers.';
    protected $panel ='Suscribers';
    protected $view ='backend.suscribers.';
    protected $title;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->title= 'List';
        $data['row']=Suscribers::all();
        return view($this->__loadDataToView($this->view . 'index'),compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {  $this->title= 'Create';
////        return view('backend.Category.create');
//
//        return view($this->__loadDataToView($this->view . 'create'));
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        $check=Suscribers::where('email',$data['email'])->count();
        {
            if ($check>0){
                Alert::error('Error', 'Email already used');
            }
            else{
                Suscribers::create( [
                    'name' => $request->name,
                    'email' => $request->email,
                ]);
                Alert::success('Congrats', 'You\'ve Successfully Subscribed');

            }
        }



//        $data['row']=Suscribers::create($request->all());

        return redirect()->route($this->__loadDataToView('frontend.home'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changeStatusSuscribers(Request $request)
    {
        $suscriber = Suscribers::find($request->id);
        $suscriber->status = $request->status;
        $suscriber->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


}
