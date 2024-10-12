<?php

namespace App\Http\Controllers;

use App\Models\MobileDevSubscription;
use Illuminate\Http\Request;

class ModelisationSubscriptionController extends Controller
{
    //
    public function index()
    {
        // Récupérer toutes les inscriptions
        $subscriptions = MobileDevSubscription::all();

        // Retourner la vue avec les inscriptions
        return view('mobiledev.index', compact('subscriptions'));
    }
}
