<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebSocket extends Controller
{
    public function websocket_log(Request $request)
    {
        Log::info($request->all());
    }
}
