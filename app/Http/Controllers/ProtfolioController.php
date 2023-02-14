<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Protfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Image;

class ProtfolioController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function AllProtfolio()
    {
        $protfolios = Protfolio::latest()->get();
        return view('admin.protfolio.index',compact('protfolios'));
    }

    public function AddProtfolio()
    {

        $categories = Category::all();
        return view('admin.protfolio.create',compact('categories'));
    }

    public function StoreProtfolio(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'title' => 'required|max:50',
            'category' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $Protfolio_image = $request->file('image');

        $name_gen = hexdec(uniqid()).'.'. $Protfolio_image -> getClientOriginalExtension();
        Image::make($Protfolio_image)->resize(300,200)->save('image/protfolio/'.$name_gen);

        $last_img = 'image/protfolio/'.$name_gen;

        Protfolio::insert([
            'name' => $request-> name,
            'title' => $request-> title,
            'category_id' => $request-> category,
            'details' => $request->details,
            'image' => $last_img,
            'link' => $request->link,
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('all.protfolio')->with('success','Protfolio Insert Successfully');


    }

    public function Edit($id)
    {
        $categories = Category::all();
        $protfolios = Protfolio::find($id);
        return view('admin.protfolio.edit',compact('protfolios','categories'));
    }

    public function Update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required|max:50',
            'title' => 'required|max:50',
            'category' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        $old_img = $request -> old_img;

        $Protfolio_image = $request->file('image');

        if (isset($Protfolio_image)) {

            $img_id = hexdec(uniqid());
            $img_ext = strtolower($Protfolio_image->getClientOriginalExtension());
            $img_name = $img_id.'.'.$img_ext;
            $up_location = 'image/protfolio/';
            $last_img = $up_location.$img_name;
            $Protfolio_image->move($up_location,$img_name);

            unlink($old_img);

            Protfolio::find($id)->update([
                'name' => $request-> name,
                'title' => $request-> title,
                'category_id' => $request-> category,
                'details' => $request->details,
                'image' => $last_img,
                'link' => $request->link,
                'created_at' => Carbon::now(),
            ]);

            return redirect()->route('all.protfolio')->with('success','Protfolio Updated Successfully');
        }
    }

    public function Delete($id)
    {
        $new = Protfolio::find($id);
        $old_img = $new->image;
        unlink($old_img);
        Protfolio::find($id)->delete();

        return redirect()->route('all.protfolio')->with('success','Protfolio Deleted Successfully');
    }
}
