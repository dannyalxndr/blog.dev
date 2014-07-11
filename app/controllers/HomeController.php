<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showRegister()
	{
		return View::make('register');
	}

	public function doRegister()
	{
		
	}

	public function showLogin()
	{
		return View::make('login');
	}
	public function doLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password)))
		{
					return Redirect::intended(action('PostsController@index'));
		}
		else
		{
			Session::flash('errorMessage', 'Email or Password was not found.');
			return Redirect::action('HomeController@showLogin')->withInput();
		}
	}
	public function logout()
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
	public function konamiPage() 
	{
		return View::make('pages.main.konami');	
	}
	public function mainPage() 
	{
		return View::make('pages.main.index');	
	}

	public function resume() 
	{
		return View::make('pages.resume.resume');
	}

	public function sayHello($name) 
	{
			$data = array(
				'name' => $name
			);

			return View::make('pages.my-first-view')->with($data);		
	}

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', ['Codeup']);
	}


}













