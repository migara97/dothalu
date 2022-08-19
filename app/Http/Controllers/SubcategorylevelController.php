<?php

namespace App\Http\Controllers;

use App\Models\Subcategorylevel;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Validator;

class SubcategorylevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = Category::all();
        $category = DB::table('subcategories')
                ->select('categories.id','subcategories.title as subcategoryName','categories.title as categoryName')
                ->leftJoin('categories', 'subcategories.categoryID', '=', 'categories.id')
                ->get();
        return view('admin.subcategorylevelAdd',compact('category'),compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategory = DB::table('subcategorylevels')
                ->select('subcategorylevels.id','subcategorylevels.title','subcategories.title as subcategoryName','categories.title as categoryName','subcategorylevels.status')
                ->leftJoin('categories', 'subcategorylevels.categoryID', '=', 'categories.id')
                ->leftJoin('subcategories', 'subcategorylevels.subcategoryID', '=', 'subcategories.id')
                ->get();

        return view('admin.subcategorylevelView')->with('category',$subcategory);
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
            'category' => 'required',
            'subcategory' => 'required',
            'sublevel' => 'required',
           
       ]);

        $subcategorylevel =New Subcategorylevel;     
        $subcategorylevel->title=$request->sublevel;
        $subcategorylevel->categoryID=$request->category;
        $subcategorylevel->subcategoryID=$request->subcategory;


        $subcategorylevel->save();
  
        if($subcategorylevel){
            alert()->success('Sub Category Level Data Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategorylevel  $subcategorylevel
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategorylevel $subcategorylevel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategorylevel  $subcategorylevel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);

        $data = DB::table('subcategorylevels')
                ->where('subcategorylevels.id','=', $id)
                ->select('subcategorylevels.id','subcategorylevels.title','subcategories.title as subcategoryName','categories.title as categoryName','subcategorylevels.status')
                ->leftJoin('categories', 'subcategorylevels.categoryID', '=', 'categories.id')
                ->leftJoin('subcategories', 'subcategorylevels.subcategoryID', '=', 'subcategories.id')
                ->first();

                // dd($data);
                return view('admin.subcategorylevelUpdate')->with('category',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subcategorylevel  $subcategorylevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;
         $subcategorylevel=$request->subcategorylevel;
         $active=$request->active;
         
 
         $data=Subcategorylevel::find($id);
 
 
         if($active==null){
             $active=0;
 
             $data->title=$subcategorylevel;
             $data->status=$active;
             
 
             $data->save();
 
             if($data){
                 alert()->success('Sub Category Level Update Successfull')->autoclose(3500);
                 return redirect('/viewSubcategorylevel');
                //  return back();
             }else{
                 alert()->warning('Something went wrong.');
             }
 
         }else{
          
 
         $data->title=$subcategorylevel;
         $data->status=$active;
         
 
         $data->save();
 
         if($data){
             alert()->success('Sub Category Level Update Successfull')->autoclose(3500);
             return redirect('/viewSubcategorylevel');
            //  return back();
         }else{
             alert()->warning('Something went wrong.');
         }
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategorylevel  $subcategorylevel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Subcategorylevel::find($id);
        $data->delete();
        if($data){
            alert()->success('Sub Category Level Delete Successfull')->autoclose(3500);
            return back();
        }else{
            alert()->warning('Something went wrong.');
            return back();
        }
    }


    public function categorySelect(Request $request){
		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 
        
        //$request->id here is the id of our chosen option id
        
         $data=Subcategory::select('title','id')->where('categoryID',$request->id)->take(100)->get();

        // $data = DB::table('subcategories')
        //         ->where('id',$request->id)
        //         ->select('subcategories.id','subcategories.title as subcategoryName','categories.title as categoryName')
        //         ->leftJoin('categories', 'subcategories.categoryID', '=', 'categories.id')
        //         ->get();

        return response()->json($data);//then sent this data to ajax success
        // dd($data);
    } 

    public function categorySelectLevel(Request $request){
		
        
         $data=Subcategorylevel::select('title','id')->where('subcategoryID',$request->id)->take(100)->get();

        

        return response()->json($data);//then sent this data to ajax success
        // dd($data);
    } 
    public function categorySelectWeb(Request $request){
		
	    //if our chosen id and products table prod_cat_id col match the get first 100 data 
        
        //$request->id here is the id of our chosen option id
        
         $data=Subcategory::select('title','id')->where('categoryID',$request->id)->take(100)->get();

        // $data = DB::table('subcategories')
        //         ->where('id',$request->id)
        //         ->select('subcategories.id','subcategories.title as subcategoryName','categories.title as categoryName')
        //         ->leftJoin('categories', 'subcategories.categoryID', '=', 'categories.id')
        //         ->get();

        return response()->json($data);//then sent this data to ajax success
        // dd($data);
    } 

    public function categorySelectLevelWeb(Request $request){
		
        
         $data=Subcategorylevel::select('title','id')->where('subcategoryID',$request->id)->take(100)->get();

        

        return response()->json($data);//then sent this data to ajax success
        // dd($data);
    }
}
