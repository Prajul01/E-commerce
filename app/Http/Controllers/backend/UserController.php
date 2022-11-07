<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Miscellaneous;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Suscribers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function view(){
        $this->title= 'Profile';
        $data['cart']=Cart::where('user_id',Auth::user()->id)->count();

        $data['category']=Category::all();
        $data['footer']=Miscellaneous::all();
        return view($this->__loadDataToView('frontend.pages.profile_view'),compact('data'));

    }
    public function edit(){
        $this->title= 'Edit Profile';
        $data['cart']=Cart::where('user_id',Auth::user()->id)->count();

        $data['category']=Category::all();
        $data['footer']=Miscellaneous::all();
        return view($this->__loadDataToView('frontend.pages.profile_edit'),compact('data'));

    }
    public function  show(){
        $this->title= 'MY Profile';
        $data['cart']=Cart::where('user_id',Auth::user()->id)->count();

        $data['category']=Category::all();
        $data['footer']=Miscellaneous::all();
        return view($this->__loadDataToView('frontend.pages.profile'),compact('data'));

    }

    public function update(Request $request){
//       dd($request->all());

        $this->title= 'Profile';
        $user = auth()->user();
       $user->update([
           'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'birth' => $request->birth,
            'gender' => $request->gender,
            'address' => $request->address,
//           'password' => Hash::make($request->password),
       ]);
//       dd($request->all());
        Alert::success( 'Profile edited');

        return redirect()->route($this->__loadDataToView('profile.view'));


    }

    public function status($id){
        $this->title= 'Edit';
        $data['row']=User::findOrFail($id);
//        dd($data['row']);
        return view($this->__loadDataToView($this->view . 'edit'),compact('data'));

    }
    public function statusUpdate(Request $request,$id){
//        dd('ji');
        $data['row'] =User::findOrFail($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route($this->__loadDataToView($this->route . 'index'));
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', $this->panel .' Update Successfully');
        } else {
            $request->session()->flash('error', $this->panel .' Update failed');

        }
        return redirect()->route($this->__loadDataToView($this->route . 'index'));

    }



//    public function changeUser(Request $request)
//    {
//        $user = User::find($request->id);
//        $user->status = $request->status;
//        $user->save();
//        return response()->json(['success'=>'Status change successfully.']);
//    }
}
