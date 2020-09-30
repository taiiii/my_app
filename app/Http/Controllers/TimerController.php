<?php

namespace App\Http\Controllers;

use App\Http\Requests\Timer\StartRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Timer;
use Auth;

class TimerController extends Controller
{
    //開始処理
    public function start(StartRequest $request)
    {
        $timer = Timer::create($request -> validated() + ['user_id' => Auth::id(), 'started_at' => Carbon::now() ]);

        return back() -> with('successMessage', $timer->title . 'が開始されました！');
    }

    public function stop(Timer $timer)
    {
        $timer -> fill(['ended_at' => Carbon::now()]) -> save();

        return back() -> with('successMessage', $timer->title . 'が終了されました！');
    }

}
