<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		return view('custom.create_form');
	}

	public function save(Request $request)
	{
		//getting data from creating/editing form
	    $post_val = $request->all();

	    if ($post_val['id'] === '') {
	        //array of creating form data
    	    $form_data = array(
    	        'user_id' => Auth::id(),
                'created_at' => $post_val['created_at'],
                'short_story' => $post_val['short_story'],
                'full_story' => $post_val['full_story'],
                'title' => $post_val['title']
            );

    	    //insert data from creating form to database
    	    $id = DB::table('blogs')->insertGetId($form_data);
	    } else {
    	    $blog_post = DB::table('blogs')
        		->where('id', $post_val['id'])
        		->first();

            if ($blog_post->id == Auth::id()) {

        	    $form_data = array(
                    'user_id' => Auth::id(),
                    'short_story' => $post_val['short_story'],
                    'full_story' => $post_val['full_story'],
                    'title' => $post_val['title']
                );

        	    //updating query to database
        	    DB::table('blogs')
                    ->where('id', $post_val['id'])
                    ->update($form_data);
            } else {
                return redirect('/');
            }
	    }

		return redirect('/');
	}

}