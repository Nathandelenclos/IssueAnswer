<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class IssueController extends Controller
{

    public function index()
    {
        return view("table", ["issues" => Issue::query()->paginate(15)]);
    }

    public function create()
    {
        return view("new");
    }

    public function store(Request $request): RedirectResponse
    {
        Issue::query()->create([
            "question" => $request->input("question"),
            "answer_1" => $request->input("answer_1"),
            "answer_2" => $request->input("answer_2"),
            "answer_3" => $request->input("answer_3"),
            "answer_4" => $request->input("answer_4"),
            "good_answer" => $request->input("good_answer")
        ]);
        return Redirect::route("issue.index");
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function destroy(Request $request): RedirectResponse
    {
        Issue::query()->where("id", "=", $request->get("id"))->delete();
        return Redirect::route("issue.index");
    }
}
