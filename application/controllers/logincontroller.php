<?php

class LoginController extends Controller{
	
	public $user;
	
	public function do_login() {
		
		$this->user = new User();			

		$data = array('email'=>$_POST['email'],'password'=>$_POST['password']);

		$message = "Login Failed - Username/Email or Password Incorrect";

		if($this->user->checkUser($data)) {
			$message = "Login Successful";
			$_SESSION['uID'] = $this->user->getUserFromEmail($_POST['email']);
		}

		

		$this->set('message', $message);
	
		header('Location: '.BASE_URL);	
	}
	
	public function logout() {
		unset($_SESSION['uID']);
		
		$user = new User();
		
		$this->set('message', 'Logged Out!');
		
		header('Location: '.BASE_URL.'login/');
	}
	
	
}
