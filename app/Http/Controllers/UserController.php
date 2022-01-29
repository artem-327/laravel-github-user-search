<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Repo;

class UserController extends Controller
{
    public function getData(){
        $userData = User::paginate(3);
        return view('home', compact('userData'));
    }

    public function repo($id){
        $userData = User::where('id', $id)->first();
        $repoData = Repo::all();
        $data = (object) [
            "user" => $userData,
            "repos" => $repoData,
        ];
        return view('repo', compact('data'));
    }
}