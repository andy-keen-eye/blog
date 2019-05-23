<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = DB::table('blogs')
    		->orderBy('created_at', 'desc')
    		->get();

		if (Auth::check()) {
            $user_id = Auth::id();
		} else {
		    $user_id = '';
		}

		return view('custom.blogs', ['posts' => $posts, 'user_id' => $user_id]);
	}

}
