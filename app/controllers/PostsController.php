<?php

class PostsController extends BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));

	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$posts = Post::with('user')->paginate(4);

		if (Input::has('search')) {
			$q = Input::get('search');
	    	$posts = Post::with('user')->where('title', 'LIKE', '%'. $q .'%')->get();  
		}

		return View::make('posts.posts-index')->with('posts', $posts);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		return View::make('layouts.create-edit');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {     
        $post = new Post();
        
        $post->id = Auth::user()->id;

        $validator = Validator::make(Input::all(), Post::$rules);

        if ($validator->fails())
        {
            Session::flash('errorMessage', 'There was a problem...');
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else
        {
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->save();

            if(Input::hasFile('image') && Input::file('image')->isValid())
            {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }

            Session::flash('successMessage', 'Success!!!');
            return Redirect::action('PostsController@index');
        }
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
    {
        $post = Post::find($id);
        $post->user_id = Auth::user()->id;
        $post->title = Input::get('title');
        $post->body = Input::get('body');
        $post->save();
        if(Input::hasFile('image') && Input::file('image')->isValid())
            {
                $post->addUploadedImage(Input::file('image'));
                $post->save();
            }
        Session::flash('successMessage', 'Sucess!!!');
        return Redirect::action('PostsController@index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('layouts.create-edit')->with('post', $post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$post = Post::findOrFail($id);
		$post->delete();
		Session::flash('successMessage', 'Post deleted successfully');
		return Redirect::action('PostsController@index');
	}


}
