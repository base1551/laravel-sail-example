<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('profile', ['user' => $user]);
    }

    public function destroy(User $user)
    {
        $this->authorize('edit', $user); //ポリシー確認
        $user->delete();
        return redirect()->route('top');
    }
}