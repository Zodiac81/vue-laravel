<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $url_data = [
            ['title' => "google", "url"=>"google.com"],
            ["title"=>"facebook", "url"=>"facebook.com"]
        ];

        return view('welcome', compact('url_data'));
    }

    public function getJson()
    {
        return [
            ['title' => "google", "url"=>"google.com"],
            ["title"=>"facebook", "url"=>"facebook.com"],
            ["title"=>"twitter",  "url"=>"twitter.com"]
        ];
    }

    public function dataChart()
    {
        return [

                "labels"=>['january','february','march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'],
                'datasets'=>[[
                    'label'=>'Sales',
                    'backgroundColor'=>'#ff6666',
                    'data'=> $this->randomInt()
                    ],
                    [
                        'label'=>'Discount',
                        'backgroundColor'=>'#99e699',
                        'data'=> $this->randomInt()
                    ]
                ]


        ];
    }

    public function randomInt()
    {
        $int = [];
        for($i=0; $i<12; $i++) {
            $int[] = random_int(100, 1500);
        }
        return $int;
    }
}
