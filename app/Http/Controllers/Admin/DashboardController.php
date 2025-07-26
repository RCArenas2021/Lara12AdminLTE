<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    public function index()
    {
        return response('OK');
    }

    public function dashboardV2()
    {
        return view('admin.dashboard-v2');
    }

    public function dashboardV3()
    {
        return view('admin.dashboard-v3');
    }

    public function getStats(): Response
    {
        return response()->json(['users' => 0]);
    }

    public function getChartData(): Response
    {
        return response()->json(['data' => []]);
    }
}
