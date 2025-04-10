<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    // Déclare les champs qui peuvent être massivement assignés
    protected $fillable = ['contenu', 'livre_id', 'user_id'];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le livre
    public function livre()
    {
        return $this->belongsTo(Livre::class);
    }
}
