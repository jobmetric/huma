<?php

namespace JobMetric\Huma\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HumaController extends Controller
{
    /**
     * index huma
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {
        return view('huma::index');
    }
}
