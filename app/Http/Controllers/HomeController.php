<?php

namespace App\Http\Controllers;
use App\Models\Stocks;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function show(){

    // Retrieve only the data for the authenticated user
    $Data = Products::get();
     // Get the current date
     $currentDate = now();
    
     // Calculate the date 10 days from now
     $expiryThreshold = $currentDate->addDays(10);
 
     // Retrieve stocks with expiry date within 10 days
     $stocksWithExpiry = Stocks::where('Stock_Expiry_Date', '<=', $expiryThreshold)->get();
     $LowStock = Products::where('Quantity', '<=', 20)->get();
      
     // Pass the variable to the view
    

    return view('cashier', compact('Data','stocksWithExpiry','LowStock'));
    }
    public function logout(){
        return redirect()->back();
    }
}
