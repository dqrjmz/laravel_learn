<?php

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

/**
 * 发回地址：王海丰，13588147256，浙江省 杭州市 萧山区 衙前镇田里胡村高田路四号。请按原包装包好发回来吧，并在发回来的包裹里写一张纸条，
 * 注明：
 * 1、换的具体要求。
 * 2、我们发回去的地址。
 * 3、您拍下的淘宝会员名。
 * 注意：1、发回来请发普通快递（如申通），不要发邮政平邮跟到付件。到付件运费翻倍，我们会拒收的哦亲亲！
 */

//路由关联控制器
//Route::get('member/info','MemberController@info');
//Route::get('member/info',['uses'=>'MemberController@info']);
//Route::get('/',['uses'=>'MemberController@info']);
Route::get('/set',['uses'=>'MemberController@setCookie']);
Route::get('/get',['uses'=>'MemberController@getCookie']);

////路由中返回视图
//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/home', function () {
//    return view('home');
//});


//多请求路由
//Route::match(['get', 'post'], 'mult', function () {
//    return 'multroutematch';
//});
//Route::match(['get','post'],'member/info',['uses'=>'MemberController@info']);


//
//Route::any('mult2', function () {
//    return 'multany';
//});

//路由参数
//Route::get('home/{id}',function($id){
//    return $id;
//});

//路由与控制器绑定
//Route::get('member/{id}',[
//    'uses'=>'MemberController@info'
//])->where('id','[0-9]');

//laravel5.2废弃了controller绑定方法
//Route::controller('member',['uses'=>'MemberController@info']);

//路由可选参数
//Route::get('info/{name?}',function($name=null){
//    return 'jname' . $name;
//});

//路由默认参数,以及路由匹配规则
//Route::get('info/{id}/{name?}',function($id,$name='jmz'){
//    return $id . '' . $name;
//})->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);

//路由别名
//Route::get('info/name',['as'=>'name',function(){
//    return route('name');
//}]);

//路由与控制器绑定别名
//Route::get('member/info',[
//    'uses'=>'MemberController@info',
//    'as'=>'memberInfo'
//]);

//路由群组
//Route::group(['prefix' => 'member'], function () {
//    Route::get('info/name', ['as' => 'name', function () {
//        return route('name');
//    }]);
//
//    Route::get('home/{id}', function ($id) {
//        return $id;
//    });
//});