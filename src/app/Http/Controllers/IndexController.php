<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Tweet;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index(){
        $status = '確認中';
        $time=Carbon::now()->format('Y-m-d H:i:s');
        $datas=Member::with('tweet')->get();
        return view('index',compact('status','time','datas'));
    }
}
