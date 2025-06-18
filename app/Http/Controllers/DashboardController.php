<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sold;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
{
    // Calculate current month's start and end dates
    $currentMonthStart = Carbon::now()->startOfMonth()->startOfDay();
    $currentMonthEnd = Carbon::now()->endOfMonth()->endOfDay();

    // Calculate current week's start and end dates
    $currentWeekStart = Carbon::now()->startOfWeek()->startOfDay();
    $currentWeekEnd = Carbon::now()->endOfWeek()->endOfDay();

    // Fetch total, weekly, and monthly sales and profit data
    $totalSalesData = Sold::selectRaw('SUM(product_price ) as total_sales, SUM(Profit) as total_profit')->first();
    $weeklyData = Sold::whereBetween('created_at', [$currentWeekStart, $currentWeekEnd])
        ->selectRaw('SUM(product_price ) as weekly_sales, SUM(Profit) as weekly_profit')
        ->first();
    $monthlyData = Sold::whereBetween('created_at', [$currentMonthStart, $currentMonthEnd])
        ->selectRaw('SUM(product_price ) as monthly_sales, SUM(Profit) as monthly_profit')
        ->first();

    return view('Dashboard', compact('totalSalesData', 'weeklyData', 'monthlyData'));
}

public function getSalesDataByDateRange(Request $request)
{
    // Get the start and end dates from the request
    $startDate = Carbon::parse($request->input('start_date'))->startOfDay();
    $endDate = Carbon::parse($request->input('end_date'))->endOfDay();

    // Fetch sales and profit data for the selected date range
    $salesData = Sold::whereBetween('created_at', [$startDate, $endDate])
        ->selectRaw('SUM(product_price ) as total_sales, SUM(Profit) as total_profit')
        ->first();

    // Fetch all products sold within the selected date range
    $soldProducts = Sold::whereBetween('created_at', [$startDate, $endDate])->get();

    return view('SalesReport', compact('salesData', 'soldProducts', 'startDate', 'endDate'));
}
public function getRange(Request $request)
{
    // Get the start and end dates from the request
    $startDate = Carbon::parse($request->input('start_date'))->startOfDay();
    $endDate = Carbon::parse($request->input('end_date'))->endOfDay();

    // Fetch sales and profit data for the selected date range
    $salesData = Sold::whereBetween('created_at', [$startDate, $endDate])
        ->selectRaw('SUM(product_price ) as total_sales, SUM(Profit) as total_profit')
        ->first();

    // Fetch all products sold within the selected date range
    $soldProducts = Sold::whereBetween('created_at', [$startDate, $endDate])->get();

    return view('SalesReport', compact('salesData', 'soldProducts', 'startDate', 'endDate'));
}
 
}
