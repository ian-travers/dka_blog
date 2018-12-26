<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showId($id = null)
    {
        echo $id ? $id : 'User is not registered!';
    }
}
