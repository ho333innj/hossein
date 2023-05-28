<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;
use Illuminate\Support\Facades\Validator;


class AdvertController extends Controller
{
    public function index()
    {
       $adverts=auth()->user()->Advert;
        return view('Adverts.index' , ['adverts' => $adverts]);

    }
































    public function createadvert()
    {
        return view('newadvert');
    }

    public function insert(request $request)
    {

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
           'price.required'=>'لظفا قیمت را وارد کنید'

       ]);
    //    dd($request->file('image'));

    $file=$request->file('image');



       if ($validator->fails()) {
           return redirect()->back()
               ->withErrors($validator);
       }
        $Advert = new Advert();
        $Advert->title = request('title');
        $Advert->describtion = request('describtion');
        $Advert->price = request('price');
        $Advert->image = request('image');
        $Advert->user_id = request('id');


        $request->file('image')->move(public_path('images'), $file->GetClientOriginalName());

        $Advert->save();


        return redirect('/advert.all');
    }

    public function advertshow(){
        $adverts= Advert::all();
        return view('lists.advertslist',['adverts' => $adverts]);
    }

    public function deleteAdvert($id){

        $advert = Advert::find($id);

        $advert->delete();

        return redirect()->back();
    }

    public function editAdvert($id){

        $advert = Advert::find($id);
       return view('editadvert',['advert'=>$advert]);
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
        return redirect(route('advertslist'));
    }
    public function test(){
        return view('editadvert');
    }

}
