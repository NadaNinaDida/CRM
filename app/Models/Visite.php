<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id', // ID du client
        'date_visite', // Date et heure de la visite
        'objet', // Objet de la visite
        'commentaire', // Notes ou commentaires sur la visite

    ];
        // Relation avec la table "Client"
        public function client()
        {
            return $this->belongsTo(Client::class);
        }
}
