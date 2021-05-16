<?php

namespace App\Http\Controllers\Events;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Event;

class EventsController extends Controller
{
	public function index(Request $request)
	{
		if(isset($request['max'])){
			$data = Event::orderBy('date')->orderBy('time')->take($request['max'])->get();
		}
		else{
			$data = Event::orderBy('date')->orderBy('time')->get();
		}
		return response()->json([
			'res' => $data
		]);
	}
	
	public function create(Request $request)
	{
		$Event = new Event();
		$Event->time = $request['time'];
		$Event->date = $request['date'];
		$Event->name = $request['name'];
		$Event->place = $request['place'];
		$Event->little_description = $request['little_description'];
		$Event->description = $request['description'];
		$Event->save();

		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function read(Request $request)
	{
		$id=$request['id'];
		$data=Event::where('id',$id)->get();
		return response()->json([
			'res'=>$data
		]);
	}

	public function update(Request $request)
	{
		$id=$request['id'];
		$time = $request['time'];
		$date = $request['date'];
		$name = $request['name'];
		$place = $request['place'];
		$description = $request['description'];
		$little_description = $request['little_description'];

		Event::where('id',$id)->update([
			'time'=>$time,
			'date'=>$date,
			'name'=>$name,
			'place'=>$place,
			'description'=>$description,
			'little_description'=>$little_description
		]);

		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function delete(Request $request)
	{
		$id=$request['id'];
		Event::destroy($id);
		return response()->json([
			'res'=>['message'=>'success']
		]);
	}
}
