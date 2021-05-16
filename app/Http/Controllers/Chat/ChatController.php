<?php

namespace App\Http\Controllers\Chat;

use Illuminate\Http\Request;
use App\Events\BroadcastMessage;
use App\Events\Connection;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
	public function send(Request $request)
	{
		event(new BroadcastMessage($request));
	}
	public function connect(Request $request)
	{
		event(new Connection($request));
	}
}
