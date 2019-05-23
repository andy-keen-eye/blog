<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index($id)
	{
		$blog_post = DB::table('blogs')
    		->where('id', $id)
    		->first();

        if ((Auth::check()) && ($blog_post->user_id == Auth::id())) {
            $user_id = Auth::id();
		} else {
		    $user_id = '';
		}

		return view('custom.post', ['blog_post' => $blog_post, 'user_id' => $user_id]);
	}

}
