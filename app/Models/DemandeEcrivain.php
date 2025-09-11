<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DemandeEcrivain extends Model
{

    // app/Models/DemandeEcrivain.php

 protected $fillable = ['nom', 'email', 'motivation', 'approuve'];

}
