<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('admin.subcategoryAdd')->with('category',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $subcategory=Subcategory::all();

        $subcategory = DB::table('subcategories')
                ->select('subcategories.id','subcategories.title','categories.title as categoryName','subcategories.status')
                ->leftJoin('categories', 'subcategories.categoryID', '=', 'categories.id')
                ->get();
        
        // dd($subcategory);

        return view('admin.subcategoryView')->with('category',$subcategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // echo($request);

        $this->validate($request,[
            'sub' => 'required',
            'category' => 'required',
           
       ]);

        $subcategory =New Subcategory;     
        $subcategory->title=$request->sub;
        $subcategory->categoryID=$request->category;


        $subcategory->save();
  
        if($subcategory){
            alert()->success('Sub Category Data Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    // public $incrementing = false;
    public function edit($id)
    {
        // $data=Subcategory::find($id);
        //   dd($data);
        $data = DB::table('subcategories')
                ->where('subcategories.id','=', $id)
                ->select('subcategories.id as id','subcategories.title','categories.title as categoryName','subcategories.status')
                ->leftJoin('categories', 'subcategories.categoryID', '=', 'categories.id')
                ->first();

        //   dd($data);
                // $data1=Subcategory::find($id);
        

          return view('admin.subcategoryUpdate')->with('category',$data);
        //  return view('admin.subcategoryUpdate', compact('data'));
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
           //dd($request);

         $id=$request->id;
         $subcategory=$request->subcategory;
         $active=$request->active;
         
 
         $data=Subcategory::find($id);
 
 
         if($active==null){
             $active=0;
 
             $data->title=$subcategory;
             $data->status=$active;
             
 
             $data->save();
 
             if($data){
                 alert()->success('Sub Category Update Successfull')->autoclose(3500);
                 return redirect('/viewSubcategory');
                //  return back();
             }else{
                 alert()->warning('Something went wrong.');
             }
 
         }else{
          
 
         $data->title=$subcategory;
         $data->status=$active;
         
 
         $data->save();
 
         if($data){
             alert()->success('Sub Category Update Successfull')->autoclose(3500);
             return redirect('/viewSubcategory');
            //  return back();
         }else{
             alert()->warning('Something went wrong.');
         }
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Subcategory::find($id);
        $data->delete();
        if($data){
            alert()->success('Sub Category Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }
}
