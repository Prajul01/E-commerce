<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends BackendBaseController
{
    protected $route ='product.';
    protected $panel ='Product';
    protected $view ='backend.product.';
    protected $title;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->title= 'List';
        $data['row']=Product::all();
        return view($this->__loadDataToView($this->view . 'index'),compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $this->title= 'Create';
        $data['categories'] = Category::pluck('name','id');
        $data['created'] = User::pluck('name','id');
        return view($this->__loadDataToView($this->view . 'create'),compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {



        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/product/'), $fileName);
            $request->request->add(['image' => $fileName]);
        }

        $request->request->add(['created_by' => auth()->user()->id]);

        $data['row']=Product::create($request->all());
        if ($data['row']){
            request()->session()->flash('success',$this->panel . 'Created Successfully');
        }else{
            request()->session()->flash('error',$this->panel . 'Creation Failed');
        }
//        return redirect()->route('category.index',compact('data'));
        return redirect()->route($this->__loadDataToView($this->route . 'index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $data['categories'] = Category::pluck('name','id');

        $this->title= 'View';
        $data['row']=Product::findOrFail($id);
//        dd($data['row']);
        return view($this->__loadDataToView($this->view . 'view'),compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data['categories'] = Category::pluck('name','id');
        $this->title= 'Edit';
        $data['row']=Product::findOrFail($id);
        return view($this->__loadDataToView($this->view . 'edit'),compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, $id)
    {

        $request->request->add(['updated_by' => auth()->user()->id]);
        $file = $request->file('image_file');
        if ($request->hasFile("image_file")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/images/product/'), $fileName);
            $request->request->add(['image' => $fileName]);
        }

        $data['row'] =Product::findOrFail($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Product::findorfail($id)->delete();
        return redirect()->route($this->__loadDataToView($this->route . 'index'))->with('success','Data Deleted Successfully');
    }

//    public function check_slug(Request $request)
//    {
//        $slug = str_slug($request->name);
//        return response()->json(['slug' => $slug]);
//    }
    public function recycle()
    {
        $this->title= 'Recycle';
        $data['row']=Product::onlyTrashed()->get();


        return view($this->__loadDataToView($this->view . 'recycle'),compact('data'));
    }

    public function restore($id){
        $data['row'] =Product:: where('id',$id)->withTrashed()->first();

        if ($data['row']->restore()){
            request()->session()->flash('success', $this->panel.' restored successfully');
        } else{
            request()->session()->flash('error', $this->panel.' restore failed');
        }
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        $data['row']= Product:: where('id',$id)->withTrashed()->first();
        if ($data['row']->forceDelete()){
            request()->session()->flash('success', $this->panel.' Delete successfully');
        } else{
            request()->session()->flash('error', $this->panel.' Delete failed');
        }
        return redirect()->route($this->__loadDataToView($this->route . 'index'))->with('success','Data Deleted Successfully');
    }

    public function changeStatusproduct(Request $request)
    {
        $slider = Product::find($request->id);
        $slider->status = $request->status;
        $slider->save();

        return response()->json(['success'=>'Status change successfully.']);



    }
}
