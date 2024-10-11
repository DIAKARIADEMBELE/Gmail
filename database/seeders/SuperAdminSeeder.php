<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Assurez-vous d'importer le modèle User
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        // Vérifiez si le super administrateur existe déjà
        if (!User::where('email', 'superadmin@example.com')->exists()) {
            User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@example.com',
                'password' => Hash::make('password'), // Mettez ici un mot de passe sécurisé
                // Ajoutez d'autres colonnes si nécessaire
            ]);
        }
    }
}
