<?php

// In Pets.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function History()
    {
        return $this->hasMany(History::class);
    }

    // Define the relationship with Client
    public function client()
    {
        return $this->belongsTo(Client::class, 'Owner_id'); // Ensure 'Owner_id' matches your foreign key column
    }
}
