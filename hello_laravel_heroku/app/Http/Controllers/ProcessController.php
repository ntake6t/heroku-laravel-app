<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class ProcessController extends Controller
{
    public function process(Request $request) {
        $param = $request->sample_data;
        //リクエストパラメーターで処理。
        //例：
        //　１．DBアクセス、
        //　２・DBインサート
        //　３．計算
        //　４．etc..
 
        //長い時間の処理
        //例：
        //　１．メール送信、
        //　２・音声認識
        //　３．音声エンコード
        //　４．イメージプロセッシング
        //　５．etc..

        $echo_calc = 1+1;

        echo "ProcessController: $echo_calc";
 
        return back();
    }
}