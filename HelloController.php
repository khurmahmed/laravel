<?php

class HelloController extends BaseController {
	
	public function index() {
		
		$data = ' World';
		return View::make('hello.print', array('data'=>$data));
	}
	
	public function change() {
		
		
		$validator = Validator::make(Input::all(), ['name' => 'required|min:3']);
		
		if($validator->fails()) {
			
			return Redirect::back()->withInput()->withErrors($validator->messages());
		}
			
		$data = Input::get('name');
		return View::make('hello.print', array('data'=>$data));
	}
}