<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Suscribers;
use App\Mail\suscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends BackendBaseController
{
    protected $route ='email.';
    protected $panel ='Email';
    protected $view ='backend.email.';
    protected $title;

    public function create(){
        return view($this->__loadDataToView($this->view . 'create'));

    }
    public function send(Request $request){
        $data['mail'] = $request->except('_token');

        $toemail=Suscribers::all();
        foreach ($toemail as $ema) {
            Mail::to($ema->email)->send(new  suscriber($data['mail']));
        }
        return redirect()->route($this->__loadDataToView('suscribers.index'))->with('success','Mail sent Successfully');

    }

}
