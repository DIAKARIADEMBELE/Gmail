@extends('layouts.app')

@section('content')
    <h1>Inscriptions à la modélisation</h1>

    @if($subscriptions->isEmpty())
        <p>Aucune inscription trouvée.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>École</th>
                    <th>Âge</th>
                    <th>Sexe</th>
                    <th>Niveau</th>
                    <th>Motivation</th>
                    <th>Expérience</th>
                    <th>Cours préféré</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subscriptions as $subscription)
                    <tr>
                        <td>{{ $subscription->firstname }}</td>
                        <td>{{ $subscription->lastname }}</td>
                        <td>{{ $subscription->email }}</td>
                        <td>{{ $subscription->phone }}</td>
                        <td>{{ $subscription->school }}</td>
                        <td>{{ $subscription->age }}</td>
                        <td>{{ $subscription->sexe }}</td>
                        <td>{{ $subscription->level }}</td>
                        <td>{{ $subscription->motivation }}</td>
                        <td>{{ $subscription->experience }}</td>
                        <td>{{ $subscription->favorite_course }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
