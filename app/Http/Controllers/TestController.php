<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;

class TestController extends Controller
{
    public function index() {
        return view('test.index');
    }

    public function input(TestPostRequest $request) {

        // バリデーション済み
        // バリデーション済みデータの取得
        $validatedData = $request->validated();

        return view('test.input', ['datum' => $validatedData]);
    }

}
