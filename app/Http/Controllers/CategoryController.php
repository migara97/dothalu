<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categoryAdd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.categoryView')->with('category',$category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
             'category' => 'required',
            
        ]);
        $category =New Category;     
        $category->title=$request->category;

        $category->save();
  
        if($category){
            alert()->success('Category Data Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Category::find($id);
        //  dd($data);

        return view('admin.categoryUpdate')->with('category',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //  echo($request);

        $id=$request->id;
        $category=$request->category;
        $active=$request->active;
        

        $data=Category::find($id);


        if($active==null){
            $active=0;

            $data->title=$category;
            $data->status=$active;
            

            $data->save();

            if($data){
                alert()->success('Category Update Successfull')->autoclose(3500);
                return redirect('/viewCategory');
                //eturn back();
            }else{
                alert()->warning('Something went wrong.');
            }

        }else{
         

        $data->title=$category;
        $data->status=$active;
        

        $data->save();

        if($data){
            alert()->success('Category Update Successfull')->autoclose(3500);
            return redirect('/viewCategory');
            //return back();
        }else{
            alert()->warning('Something went wrong.');
        }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
