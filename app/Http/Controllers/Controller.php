<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function authenticated(\Illuminate\Http\Request $request, \App\User $user ) {
        flash()->success( 'Logged in', "You have been logged in, {$user->name}" );
        return redirect()->intended($this->redirectPath());
    }
}
