<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    // ✅ Ajout du champ image ici
    protected $fillable = ['titre', 'description', 'categorie', 'image', 'user_id'];

    /**
     * Un livre peut avoir plusieurs commentaires.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}