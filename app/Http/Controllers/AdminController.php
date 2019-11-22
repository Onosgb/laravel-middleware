<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    //

    public function _construct() {
        $this->middleware('IsAdmin');
    }

    public function index() {
        return 'You are an administrator, because you are seeing this page';
    }
}

