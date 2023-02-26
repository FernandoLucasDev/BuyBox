<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableAnnouncement;
use App\Image;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function home(){

        $products = TableAnnouncement::all();

        $product_images = array();

        foreach($products as $data){
            $image = DB::table('images')->where("belongs_to", "=", $data->id_announcement)->first();
            $product_images[$data->id_announcement] = $image;       
        }

        $random_product = $products->random();

        $emphasis = [
            $product_images[$random_product->id_announcement]->image,
            $random_product->name
        ];


        return view(
            'welcome',
            [
                'products'=>$products,
                'images' => $product_images,
                "emp" => $emphasis
                ]
        );
    }

    public function test(){
        return view('product');
    }
}
