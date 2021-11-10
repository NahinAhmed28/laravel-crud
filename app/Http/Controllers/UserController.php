<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function list($id=NULL){

        return $id?User::find($id):User::all();
    }



}
