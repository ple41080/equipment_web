<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\howtoget;
use DB;
use Carbon\Carbon;
use Session;
use Auth;
use Hash;

class HowtogetController extends Controller
{
     //view page all index
    public function allhowtoget()
    {
        
        if (Auth::user()->role_name=='Admin')
        {
            $show = DB::table('howtogets')->get();
            return view('formhowtoget.all_howtoget',compact('show'));   
        }
        else
        {
            return redirect()->route('home');
        }
    }
}
