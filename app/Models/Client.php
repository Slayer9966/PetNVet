<?php

// In Client.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Define the relationship with Pets
    public function pets()
    {
        return $this->hasMany(Pets::class, 'Owner_id'); // Ensure 'Owner_id' matches your foreign key column
    }
}

