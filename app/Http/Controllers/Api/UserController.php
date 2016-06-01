<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
		/**
		 * Get all users.
		 * 
		 * @return [type] [description]
		 */
    public function getUsers()
    {
    	return \App\User::with('role')->paginate(5);
    }
}
