<?php

namespace App\Http\Controllers;

class York extends Controller
{

    /**
     * index
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author York <yorklin@core-tech.tw> 2020/9/14
     */
    public function index()
    {
        return view('york');
    }
}
