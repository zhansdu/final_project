<?php

namespace App\Http\Controllers\Faq;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Faq;

class FaqController extends Controller
{
	public function index(Request $request)
	{
		if(isset($request['max'])){
			$data= FAQ::take($request['max'])->get();
		}
		else{
			$data = FAQ::get();
		}
		return response()->json([
			'res' => $data
		]);
	}
	
	public function create(Request $request)
	{
		$faq = new Faq();
		$faq->question = $request['question'];
		$faq->answer = $request['answer'];
		$faq->save();

		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function read(Request $request)
	{
		$id=$request['id'];
		$data=Faq::where('id',$id)->get();
		return response()->json([
			'res'=>$data
		]);
	}

	public function update(Request $request)
	{
		$id=$request['id'];
		$question = $request['question'];
		$answer = $request['answer'];

		Faq::where('id',$id)->update([
			'question'=>$question,
			'answer'=>$answer
		]);

		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function delete(Request $request)
	{
		$id=$request['id'];
		Faq::destroy($id);
		return response()->json([
			'res'=>['message'=>'success']
		]);
	}

	public function search(Request $request)
	{
		$query=$request['query'];
		$data=Faq::where('question','like',"%{$query}%")
		->orWhere('answer','like',"%{$query}%")
		->get();
		return response()->json([
			'res'=>$data
		]);
	}
}
