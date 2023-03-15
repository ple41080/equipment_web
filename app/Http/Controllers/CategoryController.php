<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\categorying;
use DB;
use App\Rules\MatchOldPassword; 
use Carbon\Carbon;
use Session;
use Auth;


class CategoryController extends Controller
{
    //view page all durablearticles
     public function allcategory()
    {
        if (Auth::user()->role_name=='Admin')
        {
            $show = DB::table('categoryings')->get();
            return view('formcategory.allcategory',compact('show'));
        }
        else
        {
            return redirect()->route('home');
        }
    }

     /** save record */
    public function saveRecord(Request $request)
    { 
        $request->validate([
            'categoryings_type'        => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try {
            $categoryings_typee = new categorying;
            $categoryings_typee->categoryings_type        = $request->categoryings_type;
            $categoryings_typee->save();

            DB::commit();
            Alert::success('เพิ่มหมวดหมู่ครุภัณฑ์เรียบร้อย :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Alert::error('Add Training Type fail :)','Error');
            return redirect()->back();
        }
    }

    public function updateRecord(Request $request)
    { 
       DB::beginTransaction();
           try{
            
                $update = [
                    'id' =>$request->id,
                    'categoryings_type'  => $request->categoryings_type, 
                    'status'  => $request->status, 
                ];
                
                categorying::where('id',$request->id)->update($update);
                DB::commit();
                Alert::success('อับเดทข้อมูลเรียบร้อย','Success');
                return redirect()->route('form/all/category');
           }catch(\Exception $e){
               DB::rollback();
                Alert::error('ไม่สามารถอับเดทข้อมูลได้','Error') ;
               return redirect()->back();
           } 
    }
}
