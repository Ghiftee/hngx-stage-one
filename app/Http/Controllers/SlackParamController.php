<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SlackParamController extends Controller
{
    public function getInfo(Request $request){
        // Get query parameters
        $slackName = $request->input('slack_name');
        $track = $request->input('track');

        // Get the current day of the week
        $currentDayOfWeek = Carbon::now()->format('l');

        $currentUtcTime = Carbon::now('UTC');
        $currentUtcTime->addMinutes(2); 
        $currentUtcTime->subMinutes(2);
        

        return response()->json([
            'slack_name' => $slackName,
            'current_day_of_week' => $currentDayOfWeek,
            'current_utc_time' => $currentUtcTime->toDateTimeString(),
            'track' => $track,
            'github_url_of_file' => 'https://github.com/Ghiftee/hngx-stage-one/blob/main/app/Http/Controllers/SlackParamController.php',
            'github_url_of_source_code' => 'https://github.com/Ghiftee/hngx-stage-one',
        ], 200);

    }
}
