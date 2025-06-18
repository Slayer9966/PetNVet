<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Sold;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class SoldController extends Controller
{
    public function show()
{
    $userId = Auth::id();

    // Retrieve sold items associated with the current user
    $Sold = Sold::where('user_id', $userId)->get();

    // Calculate weekly sales
    $weeklySales = Sold::where('user_id', $userId)
        ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
        ->sum(DB::raw('product_price '));

    // Calculate monthly sales
    $monthlySales = Sold::where('user_id', $userId)
        ->whereMonth('created_at', now()->month)
        ->sum(DB::raw('product_price '));

    // Pass data to the view
    return view('Sold', [
        'Sold' => $Sold,
        'weeklySales' => $weeklySales,
        'monthlySales' => $monthlySales
    ]);
}

    
}
