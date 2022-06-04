<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use lemonpatwari\bangladeshgeocode\Models\Division;
use lemonpatwari\bangladeshgeocode\Models\District;
use lemonpatwari\bangladeshgeocode\Models\Thana;
use lemonpatwari\bangladeshgeocode\Models\Union;

class BangladeshController extends Controller
{
    public function welcome(){
        $divisions = Division::where('status', 1)->get();
        return view('welcome', compact('divisions'));
    }

    public function getDistrict($id) {
        $districts = District::where('status', 1)->where('division_id', $id)->get();
        return view('get_district', compact('districts'));
    }

    public function getThana($id){
        $thanas = Thana::where('status', 1)->where('district_id', $id)->get();
        return view('get_thana', compact('thanas'));
    }

    public function getUnion($id){
        $unions = Union::where('status', 1)->where('thana_id', $id)->get();
        return view('get_union', compact('unions'));
    }
}
