<?php
/**
 * Created by PhpStorm.
 * User: jmz11
 * Date: 2017/11/12
 * Time: 15:43
 */

namespace App\Http\Controllers;

//引入命名空间
use App\Info;
use App\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function info()
    {

//        return view('member/info',[
//            'name'=>'jmz',
//            'age'=>12
//        ]);

//        return Member::getMember();

//        $arr=DB::select('select * from wp_users ');
//        dd($arr);
//        var_dump($arr);
//        DB::update();
//        DB::insert();
//        DB::delete();


//        查询构造器
//        $bool = DB::table('info')->insert([
//            ['name' => 'jmz', 'age' => 123],
//            ['name' => 'jmz', 'age' => 123],
//        ]);
//        $bool = DB::table('info')->where('name','jmz')->update([
//            'age'=>20
//        ]);

//       $bool = DB::table('info')->where('name','jmz')->select();
//
//       // $bool = DB::table('info')->where('name','jmz')->delete();
//        var_dump($bool);

//        $arr=Info::find('jmz');
//        dd($arr);

        return 'jmz';
    }
}