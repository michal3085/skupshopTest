<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function user()
    {
        if (! Auth::user()->hasRole(RoleEnum::USER->value)) {
            return redirect()->route('books.index')->with(['error' => 'Brak uprawnień']);
        }
        return view('pages.user');
    }

    public function admin()
    {
        if (! Auth::user()->hasRole(RoleEnum::ADMIN->value)) {
            return redirect()->route('books.index')->with(['error' => 'Brak uprawnień']);
        }
        return view('pages.admin');
    }
}
