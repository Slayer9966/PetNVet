<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
class HistoryController extends Controller
{
    public function VaccineDetail($id){
        $History = History::where('Pet_Id',$id)->get(); // Fetch all owners
        
    
        // Pass the pets and owners to the 'History' view
        return view('VaccineDetail', compact( 'History','id'));
     }
     public function store(Request $request)
{
    // Validate incoming request
    $validatedData = $request->validate([
        'Pet_Id' => 'required|integer',
        'vaccine' => 'required|integer', // Vaccine ID
        'vaccineName' => 'required|string', // Vaccine name
    ]);

    // Store the vaccination history
   

    // Create a new request to add the vaccine to the bill
    $addToBillRequest = new Request([
        'product_id' => $validatedData['vaccine'],
        'Pet_Id'=>$validatedData['Pet_Id'],
        'next_vaccine_date'=>$request->input('next_vaccine_date') // Pass the vaccine ID
    ]);

    // Call the addToBill method from BillController
    $billController = new BillController();
    $response = $billController->addToBill($addToBillRequest);

    // Handle response from the addToBill method
    if ($response->getStatusCode() == 200) {
        // If the response is successful, return success message
        return redirect()->back()->with('success', 'History added successfully and product added to the bill.');
    } else {
        // If there's an error, handle it accordingly
        return redirect()->back()->with('error', 'Failed to add product to the bill. ' . $response->getContent());
    }
}

     

     public function destroyHistory($id)
     {
         // Find the Products record by its ID
         $history = History::find($id);
     
         if ($history) {
             // Delete the associated images
             
     
            
             // Delete the Products record from the database
             $history->delete();
     
             // Redirect with a success message
             return redirect()->back()->with('success', 'History has been deleted successfully.');
         }
     
         // Handle the case where the Products with the given $id is not found
         return redirect()->back()->with('error', 'History not found.');
     }
     
     public function update(Request $request)
     {
         // Find the History by its ID
         $history = History::find($request->id);
     
         // Check if the History with the given ID exists
         if (!$history) {
             return redirect()->back()->with('error', 'History not found.');
         }
     
         // Check if the 'Unique_Password' provided matches the currently authenticated user's 'Unique_Password'
         if ($request->unique_password != auth()->user()->Unique_Password) {
             return redirect()->back()->with('error', 'Incorrect Password');
         }
     
         // Update the fields
         $history->Vaccine = $request->input('vaccine');
     
         // Save the changes to the database
         $history->save();
     
         // Redirect with a success message
         return redirect()->back()->with('success', 'History updated successfully.');
     }
     
 
     
 public function editHistory($id)
 {
    $history=History::find($id);
    if($history){
     return response()->json([
         'status'=>200,
         'history'=>$history,
 
     ]);}
     else{
         return response()->json([
             'status'=>404,
             'history'=>"Data not found",
     
         ]);
     }
    
 }
}
