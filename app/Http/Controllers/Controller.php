<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\danhsachkynangchuyenmon;
use App\Models\danhsachsothich;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function welcome(){
    	$chuyennganh=danhsachkynangchuyenmon::all();
      $sothich=danhsachsothich::all();
    	return view('welcome',['chuyennganh'=>$chuyennganh,'sothich'=>$sothich]);
    }
    public function themkn(){
    	 
    }
    public function themda(){
       
    }
}
