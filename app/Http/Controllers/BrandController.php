<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function addBrand(){
        return view('admin.brand.add-brand');
    }
    public function saveBrandInfo(Request $request){
        $this->validate($request,[
            'brand_name'=> 'required|alpha'
            ]);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_discription = $request->brand_discription;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('/add-brand')->with('message','Brand Info Save Successfully');
    }
}
