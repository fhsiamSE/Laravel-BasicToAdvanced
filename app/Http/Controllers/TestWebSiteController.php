<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestWebSiteController extends Controller
{
    //this is a invokable controller, it can be used when you want to handle a single action for a route.
    public function __invoke(Request $request)
    {
        return "<h1>The Website is working properly</h1>";
    }
}
