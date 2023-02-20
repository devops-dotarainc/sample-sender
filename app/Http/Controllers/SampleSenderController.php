<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Cdn;

class SampleSenderController extends Controller
{
    public function sender(Request $request)
    {
        $data = Cdn::where('key', 'sample-receiver')->pluck('url');

        if(count($data) > 0)
        {
            $start_time = microtime(true);
            $rq = Http::withHeaders([
                'Accept' => 'application/json'
            ])->post($data[0], [
                'user_id' => $request->user_id,
                'money' => $request->money,
            ])->throw()->json();
            
            $total_time = microtime(true) - $start_time;

            return response()->json([
                'data' => $rq,
                'start_time' => $start_time,
                'total_time' => $total_time,
                'status' => 1
            ]);
        }

        return false;
    }
}
