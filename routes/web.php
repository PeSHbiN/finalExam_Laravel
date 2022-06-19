<?php

use App\Models\_new;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\New_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datas = DB::table('_news')->orderBy("id")->get();
    return view('home')->with(["datas"=>$datas]);   
});

Route::get('admin', function () {
    return view('admin');
});

Route::post('addNews', function (Request $request) {
    $table = new _new();
    $table->title = $request->title;
    $table->published_at = $request->publish_at;
    $table->author = $request->author;
    $table->body = $request->body;
    $table->save();

    return redirect('/');
});

Route::get('news', function (Request $request) {
    $data = DB::table("_news")->find($request->id);
    $comment = DB::table("comments")->where("news_id", $request->id)->get();
    return view('news')->with(["data"=>$data, "comments"=>$comment]);
    
});

Route::post('addcomment', function (Request $request) {
    $data = new comment();
    $data->comment = $request->comment;
    $data->news_id = $request->id;
    $data->save();
    return redirect()->back();
    
});