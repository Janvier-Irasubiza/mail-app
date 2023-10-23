<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteCollaborators;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function dashboard() {
        
        $users = User::all();

        return view('dashboard', compact('users'));
    }

    public function send_email(Request $request) {

        $user = User::all();

        // $userInfo = [
        //     'sunject' => $request -> subject,
        //     'message' => $request -> content
        // ];

        Mail::to($request -> to) -> send(new InviteCollaborators($request -> subject, $request -> content));

        return redirect() -> route('dashboard');
    }
}
