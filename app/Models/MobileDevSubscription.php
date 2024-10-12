<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileDevSubscription extends Model
{
    use HasFactory;
    protected $table = 'modelisation_subscriptions';

    // Définir les champs remplissables (fillable) pour les insertions en masse
    protected $fillable = [
        'firstname',
        'lastname',
        'school',
        'age',
        'sexe',
        'level',
        'email',
        'phone',
        'motivation',
        'experience',
        'favorite_course',
        'engagement_1',
        'engagement_2',
        'engagement_3',
    ];
}
