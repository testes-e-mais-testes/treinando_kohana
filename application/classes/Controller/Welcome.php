<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
		$this->response->body('hello, world!');
	}
	
	public function action_teste() {
		$this->response->body('testeeee');
	}
	
	public function action_echo() {
		$message = $this->request->param('id');
		$this->response->body("you said: " . $message);
	}
	
	public function action_echo2() {
		$message = $this->request->param('action');
		$this->response->body("voce disse: " . $message);
	}


} // End Welcome
