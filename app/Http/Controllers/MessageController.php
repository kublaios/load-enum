<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use function response;

class MessageController extends Controller
{
    public function index()
    {
    	$messages = Message::with('status')->get();
    	return response()->json(['data' => $messages]);
    }
}
