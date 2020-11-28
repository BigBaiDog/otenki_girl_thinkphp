<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
// use app\index\model\Pray;

class Submit extends Controller
{
    public function submit()
    {
        // $request = Request::instance()->post();
        // $pray = new PrayModel;

        // $user = Pray::get(1);

        // $pray->data([
        //     'prayer'  =>  $request['prayer'],
        //     'date' =>  $request['date'],
        //     'locale' =>  $request['locale'],
        //     'reason' =>  $request['reason']
        // ]);
        // $pray->save();
        // $op=Pray::where('id',0)->value('prayer');
        return '123';
    }
}