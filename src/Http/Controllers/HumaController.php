<?php

namespace JobMetric\Huma\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use JobMetric\Panelio\Http\Controllers\Controller;

class HumaController extends Controller
{
    /**
     * index huma
     *
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request)
    {
        DomiTitle(trans('huma::base.dashboard.title'));

        return view('huma::dashboard');
    }
}
