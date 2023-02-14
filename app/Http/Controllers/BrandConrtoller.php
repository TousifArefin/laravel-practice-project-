<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Multipic;
use Illuminate\Support\Carbon;
use Image;

class BrandConrtoller extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }


    public function AllBrnad()
    {
        $brands = Brand::latest()->paginate(5);
        return view('admin.brand.index',compact('brands'));
    }

    public function StoreBrand(Request $request)
    {
        $this->validate($request,[
            'brand_name' => 'required|unique:brands|max:50',
            'brand_image' => 'required|mimes:png,jpg,jpeg'
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.max' => 'Brand Name Less Then 50 Charecter',
            'brand_image.required' => 'Please Input Brand Image'

        ]);

        $brand_iamge = $request->file('brand_image');

        // $img_id = hexdec(uniqid());
        // $img_ext = strtolower($brand_iamge->getClientOriginalExtension());
        // $img_name = $img_id.'.'.$img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_iamge->move($up_location,$img_name);

        // $last_img = 'image/brand/'.$img_id;

        $img_id = hexdec(uniqid()).'.'. $brand_iamge -> getClientOriginalExtension();
        Image::make($brand_iamge)->resize(300,200)->save('image/brand/'.$img_id);

        $last_img = 'image/brand/'.$img_id;

        Brand::insert([
            'brand_name' => $request-> brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now(),
        ]);

            return redirect()->route('all.brand')->with('success','Brand Input successfully');
    }

    public function Edit($id)
    {
        $brands = Brand::find($id);
        return view('admin.brand.edit',compact('brands'));
    }

    public function Update(Request $request,$id)
    {
        $this->validate($request,[
            'brand_name' => 'required|unique:brands|max:50',
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.max' => 'Brand Name Less Then 50 Charecter',
        ]);

        $old_image = $request -> old_image;
        $brand_iamge = $request->file('brand_image');

        if($brand_iamge) {

        $img_id = hexdec(uniqid());
        $img_ext = strtolower($brand_iamge->getClientOriginalExtension());
        $img_name = $img_id.'.'.$img_ext;
        $up_location = 'image/brand/';
        $last_img = $up_location.$img_name;
        $brand_iamge->move($up_location,$img_name);

        unlink($old_image);

        Brand::find($id)->update([
            'brand_name' => $request->brand_name,
            'brand_image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('all.brand')->with('success','Brand Updated successfully');

        }else{
            Brand ::find($id)->update([
                'brand_name' =>$request->brand_name,
                'brand_image' => $last_img,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('all.brand')->with('success','Brand Updated successfully');
        }
    }

    public function Delete ($id)
    {
        $image = Brand::find($id);
        $old_image = $image->brand_image;
        unlink($old_image);

        Brand::find($id)->delete();

        return redirect()->route('all.brand')->with('success','Brand Deleted Successfully');
    }

    public function Multipic()
    {
        $images = Multipic::all();
        return view('admin.multipic.index',compact('images'));
    }

    public function StoreImg(Request $request)
    {
        $image = $request->file('image');

        foreach($image as $multi_img){
            $img_name = hexdec(uniqid()).'.'.$multi_img -> getClientOriginalExtension();
            Image::make($multi_img)->resize(300, 300)->save('image/multi/'.$img_name);

            $last_img = 'image/multi/'.$img_name;

            Multipic::insert([
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);
       }

       return redirect()->route('multi.image')->with('success','Multi Image Inserted Successfully');
    }

}
