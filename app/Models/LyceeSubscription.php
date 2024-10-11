<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LyceeSubscription extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "firstname",
        "lastname",
        "school",
        "position",
       "email",
        "phone",
        "participant_1",
        "participant_2",
        "participant_3",
        "participant_4",
        "participant_5",
        "engagement_1" ,          
        "engagement_2",            
       "engagement_3",           
        "engagement_4",
        
    ];
}
