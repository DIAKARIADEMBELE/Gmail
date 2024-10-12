<?php

namespace App\Http\Controllers;

use App\Models\ModelisationSubscription;
use Illuminate\Http\Request;

class MobileDevSubscriptionController extends Controller
{
    public function index()
    {
        // Récupérer toutes les inscriptions de la table modelisation_subscriptions
        $subscriptions = ModelisationSubscription::all();

        // Retourner la vue avec les données récupérées
        return view('modelisation.index', compact('subscriptions'));
    }
}
