<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Comment;
use Redirect, Input;

class CommentsController extends Controller {

	public function store()
	{
		if (Comment::create(Input::all())) {
			return Redirect::back();
		}else{
			return Redirect::back()->withInput()->withErrors('评论发表失败！');
		}
	}


}
