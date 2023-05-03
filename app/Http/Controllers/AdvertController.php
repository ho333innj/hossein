<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advert;
use Illuminate\Support\Facades\Validator;


class AdvertController extends Controller
{
    public function createadvert()
    {
        return view('newadvert');
    }

    public function insert()
    {

        $validator = Validator::make(request()->all(), [
            'title' => 'required|min:3|max:100',
            'describtion' => 'required|min:10|max:255',
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
            return redirect()->back()
                ->withErrors($validator);
        }


        $Advert = new Advert();
        $Advert->title = request('title');
        $Advert->describtion = request('describtion');
        $Advert->price = request('price');
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

    public function updateAdvert($id){
        $advert = Advert::find($id);

        $advert->title = request()->title;
        $advert->describtion = request()->describtion;
        $advert->price = request()->price;

        $advert->save();

        return redirect('/advert.all');
    }
}
