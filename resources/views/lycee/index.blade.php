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
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>École</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
