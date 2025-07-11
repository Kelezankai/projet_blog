<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'categorie',
        'user_id',
        'image'
    ];


    /**
     * Un livre peut avoir plusieurs commentaires.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    // App\Models\Livre.php

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
