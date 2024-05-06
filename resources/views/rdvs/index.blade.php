@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 lg:p-8 bg-white border-b border-gray-200 min-w-full">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Liste des Rendez-vous') }}
                    </h2>
                    
                    <a href="{{ route('clients.create') }}" class="btn" style="background-color: #3498db; border-radius: 8px; color: white; padding: 8px 15px; text-decoration: none; transition: background-color 0.3s ease-in-out;">
                        Créer un nouveau rendez-vous
                    </a>

                </div>

                <div class="my-6 overflow-x-auto">
                    <table class="w-full min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="py-3 px-6">Date de Création</th>
                                <th scope="col" class="py-3 px-6">Date de Mise à Jour</th>
                                <th scope="col" class="py-3 px-6">Date du Rdv</th>
                                <th scope="col" class="py-3 px-6">Nom de l'Employé</th>
                                <th scope="col" class="py-3 px-6">Nom du Client</th>
                                <th scope="col" class="py-3 px-6">Actions</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($rdvs as $rdv)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rdv->created_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rdv->updated_at }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rdv->dateRdv }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rdv->employe->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rdv->client->nomCli }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a class="btn" href="{{ route('rdvs.show', ['idRdv' => $rdv->idRdv]) }}" style="background-color: #3498db; border-radius: 8px; color: white; padding: 8px 10px; text-decoration: none; transition: background-color 0.3s ease-in-out; max-width: 100px; display: inline-block; text-align: center;">
                                        Visionner
                                    </a>

                                    <form action="{{ route('rdvs.destroy', ['idRdv' => $rdv->idRdv]) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn" style="background-color: #e74c3c; border-radius: 8px; color: white; padding: 8px 10px; text-decoration: none; transition: background-color 0.3s ease-in-out; max-width: 100px; display: inline-block; text-align: center;">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
