<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

use App\Models\User;


class UserController extends Controller
{
    function queries(){
        $result=User::all();
       return $result;
    }
}
