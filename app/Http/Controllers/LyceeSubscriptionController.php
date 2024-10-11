<?php

namespace App\Http\Controllers;

use App\Models\LyceeSubscription; // Ajoutez cette ligne pour importer le modèle
use Illuminate\Http\Request;

class LyceeSubscriptionController extends Controller
{
    public function index()  
    {
        // Récupère toutes les inscriptions
        $subscriptions = LyceeSubscription::all();

        // Retourne la vue avec les données des inscriptions
        return view('lycee.index', compact('subscriptions'));
    }
}
