<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les attributs assignables.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'firstname',
        'password',
        'role',
    ];

    /**
     * Vérifie si l'utilisateur est un écrivain.
     */
    public function isWriter()
    {
        return $this->role == 'ecrivain';
    }

    /**
     * Vérifie si l'utilisateur est un lecteur.
     */
    public function isReader()
    {
        return $this->role == 'lecteur';
    }

    /**
     * L'utilisateur peut avoir plusieurs commentaires.
     */
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    /**
     * Attributs masqués pour la sérialisation.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Casts des attributs.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
