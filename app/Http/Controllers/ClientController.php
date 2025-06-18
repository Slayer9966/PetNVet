<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
  
    public function store(Request $request)
    {
        do {
            // Generate a random 4-digit number
            $uniqueId = str_pad(mt_rand(0, 9999), 4, '0', STR_PAD_LEFT);
        } while (Client::where('Unique_Id', $uniqueId)->exists());

        $client = Client::create([
            'Name' => $request->input('name'),
            'PhoneNumber'=>$request->input('number') ,// Replace with actual customer value
            'email'=>$request->input('email'),
            'Unique_Id' => $uniqueId
           ]);
       
        
        // Redirect to a success page or return a response as needed
        return redirect()->back()->with('success', 'Owner Details has been successfully saved.');;
        
    }
    public function destroyOwner($id)
    {
        // Find the Products record by its ID
        $client = Client::find($id);
    
        if ($client) {
            // Delete the associated images
            
    
           
            // Delete the Products record from the database
            $client->delete();
    
            // Redirect with a success message
            return redirect()->back()->with('success', 'Owner Details has been deleted successfully.');
        }
    
        // Handle the case where the Products with the given $id is not found
        return redirect()->back()->with('error', 'Owner not found.');
    }
    
    public function update(Request $request, Client $tail)
{
    // Find the Products by its ID (assuming you have the model binding set up in your routes)
    $client = Client::find($request->id);

    // Check if the Products with the given ID exists
    if (!$client) {
        // Handle the case where the Products with the given $id is not found.
        // You can return an error message or redirect as needed.
        return redirect()->back()->with('error', 'Owner not found.');
    }

    // Check if the 'Unique_Password' provided matches the currently authenticated user's 'Unique_Password'
    if ($request->unique_password != auth()->user()->Unique_Password) {
        // Handle the case where the Unique_Password doesn't match.
        // You can return an error message or redirect as needed.
        return redirect()->back()->with('error', 'Incorrect Password');
    }

    // Check if a new image file is provided
   

    // Update the other fields directly
    $client->Name = $request->input('name');
    $client->PhoneNumber= $request->input('number');
    $client->email = $request->input('email');
 



    // Save the changes to the database
    $client->save();
    

    // Redirect with a success message
    return redirect()->back()->with('success', 'Owner Details has been updated successfully.');
}

    
public function editOwner($id)
{
   $client=Client::find($id);
   if($client){
    return response()->json([
        'status'=>200,
        'client'=>$client,

    ]);}
    else{
        return response()->json([
            'status'=>404,
            'client'=>"Data not found",
    
        ]);
    }
   
}
public function Owner(){
    $clients = Client::all();
    
    // Pass the clients to the 'Owner' view
    return view('Client', compact('clients'));
}
public function getOwners()
{
    // Fetch owners from the database
    $owners = Client::all(); // Adjust this as needed

    // Return the data as JSON
    return response()->json($owners);
}
}
