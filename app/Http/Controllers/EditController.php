<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Request $request, $id)
	{
		$blog_post = DB::table('blogs')
    		->where('id', $id)
    		->first();

        if ((Auth::check()) && ($blog_post->user_id == Auth::id())) {
            $user_id = Auth::id();
		} else {
		    return redirect('/post-'.$blog_post->id);
		}

		return view('custom.create_form', ['post' => $blog_post, 'user_id' => Auth::id()]);
	}
}
