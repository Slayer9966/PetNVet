<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pets;
use App\Models\Client;
use App\Models\History;

class PetsController extends Controller
{
    public function store(Request $request)
    {
        
        $pet = Pets::create([
            'Owner_Id' => $request->input('Owner'),
            'PetName' => $request->input('petname'),
            'Species'=>$request->input('spicies'),
            'Breed'=>$request->input('breed'),
            'Description'=>$request->input('Desc'),
           ]);
       
        
        // Redirect to a success page or return a response as needed
        return redirect()->back()->with('success', 'Pets  has been successfully saved.');;
        
    }
    public function destroyPet($id)
    {
        // Find the Products record by its ID
        $pet = Pets::find($id);
    
        if ($pet) {
            // Delete the associated images
            
    
           
            // Delete the Products record from the database
            $pet->delete();
    
            // Redirect with a success message
            return redirect()->back()->with('success', 'Pet has been deleted successfully.');
        }
    
        // Handle the case where the Products with the given $id is not found
        return redirect()->back()->with('error', 'Pet not found.');
    }
    
    public function update(Request $request)
    {
        // Find the Pet by its ID
        $pet = Pets::find($request->id);
    
        // Check if the Pet with the given ID exists
        if (!$pet) {
            return redirect()->back()->with('error', 'Pet not found.');
        }
    
        // Check if the 'Unique_Password' provided matches the currently authenticated user's 'Unique_Password'
        if ($request->unique_password != auth()->user()->Unique_Password) {
            return redirect()->back()->with('error', 'Incorrect Password');
        }
    
        // Update the fields
        $pet->Owner_Id = $request->input('Owner');
        $pet->PetName = $request->input('petname');
        $pet->Species = $request->input('spicies');
        $pet->Breed = $request->input('breed');
        $pet->Description = $request->input('Desc');
    
        // Save the changes to the database
        $pet->save();
    
        // Redirect with a success message
        return redirect()->back()->with('success', 'Pet has been updated successfully.');
    }
    

    
public function editPet($id)
{
   $pet=Pets::find($id);
   if($pet){
    return response()->json([
        'status'=>200,
        'pet'=>$pet,

    ]);}
    else{
        return response()->json([
            'status'=>404,
            'pet'=>"Data not found",
    
        ]);
    }
   
}
public function Pet(){
    $pets = \DB::table('pets')
    ->join('clients', 'pets.Owner_id', '=', 'clients.id')
    ->select('pets.*', 'clients.Name as owner_name', 'clients.email as owner_email')
    ->get(); // Fetch pets with their associated owners
    $owners = Client::all(); // Fetch all owners

    // Pass the pets and owners to the 'Pet' view
    return view('Pet', compact('pets', 'owners'));
}


public function getPetsByUniqueId($uniqueId)
    {
        // Validate the unique ID (must be exactly 4 digits)
        if (!preg_match('/^\d{4}$/', $uniqueId)) {
            return response()->json(['error' => 'Invalid unique ID format'], 400);
        }

        // Find the owner by unique ID
        $owner = Client::where('Unique_Id', $uniqueId)->first();

        if (!$owner) {
            return response()->json(['error' => 'Owner not found'], 404); // Return error if owner not found
        }

        // Get pets for the found owner
        $pets = Pets::where('Owner_id', $owner->id)->get();

        // Fetch vaccination history for each pet
        $petsWithHistory = $pets->map(function ($pet) {
            $pet->vaccination_history = History::where('Pet_Id', $pet->id)->get();
            return $pet;
        });

        // Return the pets with their vaccination history as JSON
        return response()->json($petsWithHistory);
    }
}
