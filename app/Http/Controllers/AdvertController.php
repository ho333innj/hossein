<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AdvertController extends Controller
{
    public function newad()
    {
        $id= auth()->user()->id;
        // $id= Auth::id();
        return view('dashboard.newad', ['id' => $id]);
    }

    public function myads()
    {
        $id= auth()->user()->id;
        $adverts= Advert::where('user_id', $id)->get();

        // $id= Auth::id();
        return view('dashboard.myads', ['adverts' => $adverts]);
    }

    public function insert(request $request)
    {
        // $test= request('image');
        // dd($test);


       $validator = Validator::make(request()->all(), [
           'title' => 'required|min:3|max:100',
           'describtion' => 'required|min:5|max:255',
           'price' => 'required',
           'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
       ],[
           'title.required'=>'لطفا عنوان را وارد کنید',
           'title.min'=>'طول عنوان باید بیشتر از 2 کاراکتر باشد',
           'title.max'=>'طول عنوان نباید بیشتر از 100 کاراکتر باشد',
           'describtion.required'=>'لطفا متن توصیف کالا را وارد کنید',
           'describtion.max'=>'طول توصیف کالا نباید بیشتر از 255 کاراکتر باشد',
           'price.required'=>'لظفا قیمت را وارد کنید',
       ]);
       $imagename=time() . '-' . request('image')->GetClientOriginalName();
       $request->file('image')->move(public_path('images'),  $imagename);

    //    dd( $imagename);
    $file=$request->file('image');
    $id=Auth::id();
       if ($validator->fails()) {
           return redirect()->back()
               ->withErrors($validator);
       }
        $Advert = new Advert();
        $Advert->title = request('title');
        $Advert->describtion = request('describtion');
        $Advert->price = request('price');
        $Advert->image = $imagename;
        $Advert->user_id = $id;
        $Advert->save();
        return redirect('/dashboard')->with('status' , 'آگهی شما با موفقیت ثبت شد');
    }

    public function advertshow(){
        $adverts= Advert::all();
        return view('lists.advertslist',['adverts' => $adverts]);
    }

    public function deleteAdvert($id){

        $advert = Advert::find($id);

        $advert->delete();

        return redirect()->back()->with('status' , 'آگهی شما حذف شد');
    }

    public function editAdvert($id){

        $advert = Advert::find($id);
       return view('dashboard.editad',['advert'=>$advert]);
    }

    public function updateAdvert(request $request , $id){

    //     $advert = Advert::find($id);

    //     $advert->title = request()->title;
    //     $advert->describtion = request()->describtion;
    //     $advert->price = request()->price;

    //     $advert->save();

    //     return redirect('/advert.all');
    // dd("test");
    $validator = Validator::make(request()->all(), [
        'title' => 'required|min:3|max:100',
        'describtion' => 'required|min:5|max:255',
        'price' => 'required'

    ],[
        'title.required'=>'لطفا عنوان را وارد کنید',
        'title.min'=>'طول عنوان باید بیشتر از 2 کاراکتر باشد',
        'title.max'=>'طول عنوان نباید بیشتر از 100 کاراکتر باشد',
        'describtion.required'=>'لطفا متن توصیف کالا را وارد کنید',
        'describtion.max'=>'طول توصیف کالا نباید بیشتر از 255 کاراکتر باشد',
        'price.required'=>'لظفا قیمت را وارد کنید'

    ]);



    if ($validator->fails()) {
        return redirect("/advert.all")
            ->withErrors($validator);
    }
        Advert::where('id' , $id)->update([
            'title'=>$request->title,
            'describtion'=>$request->describtion,
            'price'=>$request->price
        ]);
        return redirect(route('myads'))->with('status' , 'آگهی شما با موفقیت وایرایش شد');
    }
    public function createadvert(){
        return view('newadvert');
    }

}

