<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Protfolio;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class HomeController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
        $protfolios = Protfolio::with('category')->get();
        $categories = Category::all();
        $sliders = Slider::latest()->get();
        $brands = Brand::latest()->get();
        return view('/home',compact('brands','sliders','protfolios','categories'));
    }

    public function AllSlider()
    {
        $sliders = Slider::latest()->get();
        return view('admin.slider.index',compact('sliders'));
    }

    public function AddSlider()
    {

            return view('admin.slider.create');
    }

    public function StoreSlider(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|mimes:png,jpg,jpeg',
            'title' => 'required|unique:sliders|max:50',
            'description' => 'required|max:255'
        ],
        [
            'title.required' => 'Please Input Title',
            'description.required' => 'Please Input Description',
            'title.max' => 'Title Less Then 50 Charecter'

        ]);

        $slider_image = $request->file('image');

        $img_id = hexdec(uniqid()).'.'. $slider_image -> getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1080)->save('image/slider/'.$img_id);

        $last_img = 'image/slider/'.$img_id;

        Slider::insert([
            'title' => $request -> title,
            'description' => $request -> description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('all.slider')->with('success','Slider Insert Successfully');
    }

    public function Edit($id)
    {
        $sliders = Slider::find($id);
        return view('admin.slider.edit',compact('sliders'));
    }

    public function Update(Request $request, $id)
    {
        $this->validate($request,[
            'image' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        $old_img = $request -> old_img;

        $slider_image = $request->file('image');

        if(isset($slider_image)) {

            $img_id = hexdec(uniqid());
            $img_ext = strtolower($slider_image->getClientOriginalExtension());
            $img_name = $img_id.'.'.$img_ext;
            $up_location = 'image/slider/';
            $last_img = $up_location.$img_name;
            $slider_image->move($up_location,$img_name);

            unlink($old_img);

            Slider ::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('all.slider')->with('success','Slider Insert Successfully');

        }else{
            Slider ::find($id)->update([
                'title' => $request -> title,
                'description' => $request -> description,
                'image' => $last_img,
                'created_at' => Carbon::now()
            ]);

             return redirect()->route('all.slider')->with('success','Slider Insert Successfully');

        }
    }

    public function Delete ($id)
    {
        $img = Slider::find($id);
        $old_img = $img->image;
        unlink($old_img);
        Slider::find($id)->delete();

        return redirect()->route('all.slider')->with('Success', 'Slider Deleted Successfully');
    }

}
