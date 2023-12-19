<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $todaySalesTotal = DB::table('sales')
                        ->whereDate('created_at', Carbon::today())
                        ->sum('total_price');

        $yesterdaySalesTotal = DB::table('sales')
                        ->whereDate('created_at', Carbon::yesterday())
                        ->sum('total_price');

        $thisMonthSalesTotal = DB::table('sales')
                        ->whereMonth('created_at', Carbon::now()->month)
                        ->sum('total_price');

        $lastMonth = Carbon::now()->subMonth();
        $lastMonthNumber = $lastMonth->month;

        $lastMonthSalesTotal = DB::table('sales')
                        ->whereMonth('created_at', $lastMonthNumber)
                        ->sum('total_price');
        return view ("backend.dashboard.index", compact('todaySalesTotal', 'yesterdaySalesTotal', 'thisMonthSalesTotal', 'lastMonthSalesTotal'));
    }
}
