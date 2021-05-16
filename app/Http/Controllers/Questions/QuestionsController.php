<?php

namespace App\Http\Controllers\Questions;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Question;

class QuestionsController extends Controller
{
	public function index(Request $request)
	{
		if(isset($request['max'])){
			$data= Question::take($request['max'])->get();
		}
		else{
			$data = Question::get();
		}
		return response()->json([
			'res' => $data
		]);
	}
	
	public function create(Request $request)
	{
		$question = new Question();
		$question->question = $request['question'];
		$question->mail = $request['mail'];
        $question->answered = 0;
        $question->date = date("Y-m-d");;
		$question->save();

		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function read(Request $request)
	{
		$id=$request['id'];
		$data=Question::where('id',$id)->get();
		return response()->json([
			'res'=>$data
		]);
	}

	public function update(Request $request)
	{
		$id=$request['id'];
		$answered = $request['answered'];

		Question::where('id',$id)->update([
			'answered'=>$answered
		]);

		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function delete(Request $request)
	{
		$id=$request['id'];
		Question::destroy($id);
		return response()->json([
			'res'=>['message'=>'success']
		]);
	}
}
