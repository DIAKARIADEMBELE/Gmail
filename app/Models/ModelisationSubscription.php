<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelisationSubscription extends Model
{
    use HasFactory;
    protected $table = 'mobile_dev_subscriptions';

    // Champs remplissables (fillable)
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
