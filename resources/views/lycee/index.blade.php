@extends('layouts.app')

@section('content')
    <h1>Inscriptions au lycée</h1>

    @if($subscriptions->isEmpty())
        <p>Aucune inscription trouvée.</p>
    @else
        <table>
            <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>École</th>
                <th>Position</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Participant 1</th>
                <th>Participant 2</th>
                <th>Participant 3</th>
                <th>Participant 4</th>
                <th>Participant 5</th>
                <th>Engagement 1</th>
                <th>Engagement 2</th>
                <th>Engagement 3</th>
                <th>Engagement 4</th>
            </tr>
            </thead>
            <tbody>
                @foreach($subscriptions as $subscription)
                <tr>
                    <td>{{ $subscription->firstname }}</td>
                    <td>{{ $subscription->lastname }}</td>
                    <td>{{ $subscription->school }}</td>
                    <td>{{ $subscription->position }}</td>
                    <td>{{ $subscription->email }}</td>
                    <td>{{ $subscription->phone }}</td>
                    <td>{{ $subscription->participant_1 }}</td>
                    <td>{{ $subscription->participant_2 }}</td>
                    <td>{{ $subscription->participant_3 }}</td>
                    <td>{{ $subscription->participant_4 }}</td>
                    <td>{{ $subscription->participant_5 }}</td>
                    <td>{{ $subscription->engagement_1 }}</td>
                    <td>{{ $subscription->engagement_2 }}</td>
                    <td>{{ $subscription->engagement_3 }}</td>
                    <td>{{ $subscription->engagement_4 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
