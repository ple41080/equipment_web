<?php

namespace App\Http\Controllers;

use App\Models\Maintain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Session;
use Auth;

class MaintainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allmaintain()
    { 
         
        $showdate = DB::table('durablearticles')->get();   
        return view('formmaintain.allmaintain',compact('showdate'));
    }

    public function addmaintain()
    {
        return view('formmaintain.addmaintain');   
    }
   
    public function editmaintain($id)
    {
          
        $showdate = DB::table('durablearticles')->where('id',$id)->first();   
        return view('formmaintain.maintain_history',compact('showdate'));
    }
    
    public function addhistory($id)
    {
        $showdate = DB::table('durablearticles')->where('id',$id)->first();
        return view('formmaintain.maintain_mend',compact('showdate'));
    }
}






