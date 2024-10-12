<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LyceeSubscription;

class LyceeSubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer des inscriptions fictives
        LyceeSubscription::create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'school' => 'Lycée International',
            'position' => 'Student',
            'email' => 'john.doe@example.com',
            'phone' => '123456789',
            'participant_1' => 'Alice',
            'participant_2' => 'Bob',
            'participant_3' => 'Charlie',
            'participant_4' => 'David',
            'participant_5' => 'Eve',
            'engagement_1' => 'Engagement A',
            'engagement_2' => 'Engagement B',
            'engagement_3' => 'Engagement C',
            'engagement_4' => 'Engagement D',
        ]);

        LyceeSubscription::create([
            'firstname' => 'Jane',
            'lastname' => 'Smith',
            'school' => 'Lycée des Sciences',
            'position' => 'Student',
            'email' => 'jane.smith@example.com',
            'phone' => '987654321',
            'participant_1' => 'Alice',
            'participant_2' => 'Bob',
            'participant_3' => 'Charlie',
            'participant_4' => 'David',
            'participant_5' => 'Eve',
            'engagement_1' => 'Engagement X',
            'engagement_2' => 'Engagement Y',
            'engagement_3' => 'Engagement Z',
            'engagement_4' => 'Engagement W',
        ]);
    }
}
