<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function Allcat()
    {
        $categories = Category::latest()->paginate(10);
        $trashCat = Category::onlyTrashed()->latest()->get();
        return view('admin.category.index', compact('categories','trashCat'));
    }

    public function Addcat(Request $request)
    {
        $this->validate($request,[
            'category_name' => 'required|unique:categories|max:255',
        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category Name Less Then 255 Character'
        ]);

        //insert data with orm
        // Category::insert([
        //     'category_name' => $request->category_name,
        //     'user_id' => Auth::user()->id,
        //     'created_at' => Carbon::now()
        // ]);

            $category = new Category();
            $category -> category_name = $request->category_name;
            $category -> slug = str_slug($request->category_name);
            $category -> user_id = Auth::user()->id;
            $category -> save();

            //insert data with query builder

            //  $data = array();
            //  $data['category_name'] = $request->category_name;
            //  $data['user_id'] = Auth::user()->id;
            //  DB::table('categories')->insert($data);


        return redirect()->back()->with('success','Category Inserted Successfully');
    }

    public function Edit($id)
    {
        // Query builder
        // $categories = DB::table('categories'->where('id', $id)->first());

        //eloquent orm
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    public function Update(Request $request,$id)
    {
        //Query builder
        // $data = array();
        // $data['category_name'] = $request->category_name;
        // $data['user_id'] = Auth::user()->id;
        // DB::table('categories')->where('id',$id)->update($data);

        //eloquent orm

        $update = Category::find($id)->update([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('all.category')->with('success','Category Updated Successfully');
    }

    public function SoftDelete($id)
    {
        $delete = Category::find($id)->delete();

        return redirect()->back()->with('success','Category Removed Successfully');
    }

    public function Restore($id)
    {
        $delete = Category::withTrashed()->find($id)->restore();
        return redirect()->back()->with('success','Category Restore Successfully');

    }

    public function Pdelete($id)
    {
        $delete = Category::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success','Category Deleted Successfully');
    }
}
