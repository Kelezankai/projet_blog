<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    // Déclare les champs qui peuvent être massivement assignés
    protected $fillable = ['id','contenu', 'user_id', 'livre_id',' created_at','updated_at'];
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
