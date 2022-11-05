<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Category;
use App\Models\Miscellaneous;
use App\Models\Slider;
use App\Models\Suscribers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends BackendBaseController
{

    protected $route ='user.';
    protected $panel ='User';
    protected $view ='backend.user.';
    protected $title;

    public function index(){
        $this->title= 'List';
        $data['row']=User::all();
        return view($this->__loadDataToView($this->view . 'index'),compact('data'));

    }

    public function edit(){
        $this->title= 'Profile';
//     $data['row'] =User::findOrFail($id);

//        $data['row'] =User::where('id',(Auth::user()->id))->get();
//     dd($data['row']);
        $data['category']=Category::all();
        $data['footer']=Miscellaneous::all();
        return view($this->__loadDataToView('frontend.pages.profile'),compact('data'));
//        return view('frontend.pages.profile',compact('data'));
        return view($this->__loadDataToView($this->view . 'pages.profile'),compact('data'));
    }

    public function update(UserRequest $request){

        $this->title= 'Profile';

        $user = auth()->user();
       $user->update([
           'name' => $request->name,
            'email' => $request->email,
           'password' => Hash::make($request->password),
       ]);
        Alert::success( 'Profile edited');

        return redirect()->route($this->__loadDataToView('profile.edit'));


    }
    public function changeUser(Request $request)
    {
        $user = User::find($request->id);
        $user->type = $request->type;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }
}
