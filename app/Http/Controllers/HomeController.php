<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function home() {
        $issue = Issue::query()->inRandomOrder()->first();

        return view("welcome", ["issue" => $issue]);
    }
}
