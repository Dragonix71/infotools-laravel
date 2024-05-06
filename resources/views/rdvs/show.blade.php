{{-- resources/views/rdvs/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 mx-6">
    <h1 class="text-2xl font-bold mb-4">Détails du Rendez-vous</h1>

    <div class="bg-gray-50 p-6 shadow rounded-lg">
        <div class="flex items-center space-x-4 mb-6">
            <i class="fas fa-calendar-check text-blue-600 text-3xl"></i>
            <h2 class="text-2xl font-bold text-gray-800">Rendez-vous #{{ $rdv->id }}</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-gray-700">
            <p><i class="fas fa-hashtag text-blue-500"></i> <strong>ID du Rdv :</strong> {{ $rdv->id }}</p>
            <p><i class="fas fa-clock text-blue-500"></i> <strong>Date :</strong> {{ $rdv->dateRdv }}</p>
            <p><i class="fas fa-user-tie text-green-500"></i> <strong>ID de l'Employé :</strong> {{ $rdv->idEmploye }}</p>
            <p><i class="fas fa-user text-purple-500"></i> <strong>ID du Client :</strong> {{ $rdv->idClient }}</p>
            <p><i class="fas fa-calendar-plus text-pink-500"></i> <strong>Date de création :</strong> {{ $rdv->created_at }}</p>
            <p><i class="fas fa-calendar-check text-indigo-500"></i> <strong>Date de mise à jour :</strong> {{ $rdv->updated_at }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('rdvs.index') }}" style="background-color: #3498db; border-radius: 8px; color: white; padding: 8px 15px; text-decoration: none; transition: background-color 0.3s ease-in-out; display: inline-block;">
            Retour à la liste des rendez-vous
        </a>
    </div>




</div>

@endsection
