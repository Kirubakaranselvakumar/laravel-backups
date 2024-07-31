<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id){
        return 'For Viewing a Post id:' .$id;
    }
}
