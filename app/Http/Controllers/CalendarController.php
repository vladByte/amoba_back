<?php

namespace App\Http\Controllers;

use App\Models\calendar;
use App\Models\calendar_days_disabled;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){
        $calendar = calendar::all();

        return response()->json($calendar->toArray());
    }

    public function calendarDisabledDays(Request $request){
        $calendarDisabledDays = calendar_days_disabled::where('calendar_id',1)
            ->whereBetween('day',[$request->min_date.'00:00:00',$request->max_date.'23:59:59'])->get();

        return response()->json($calendarDisabledDays->toArray());
    }
}
