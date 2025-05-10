<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['id','titre', 'description', 'categorie',' user_id','created_at','updated_at', 'image'];

    /**
     * Un livre peut avoir plusieurs commentaires.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }
}
