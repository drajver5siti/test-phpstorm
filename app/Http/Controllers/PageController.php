<?php

namespace App\Http\Controllers;

use App\Enums\Role;
use App\Models\User;
use Illuminate\View\View;

class PageController extends Controller
{
    public function getIndexPage() : View {
        return view('index');
    }
}
