{{-- resources/views/produits/show.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Détails du Produit</h1>

    <div class="bg-gray-50 p-6 shadow rounded-lg">
        <div class="flex items-center space-x-4 mb-6">
            <i class="fas fa-box text-blue-600 text-3xl"></i>
            <h2 class="text-2xl font-bold text-gray-800">Produit #{{ $produit->idProduit }}</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-4 text-gray-700">
            <p><i class="fas fa-tag text-blue-500"></i> <strong>Nom :</strong> {{ $produit->nomProduit }}</p>
            <p><i class="fas fa-money-bill-wave text-green-500"></i> <strong>Prix :</strong> {{ $produit->prixProduit }}</p>
            <p><i class="fas fa-layer-group text-yellow-500"></i> <strong>Type :</strong> {{ $produit->typeProduit }}</p>
            <p><i class="fas fa-align-left text-red-500"></i> <strong>Description :</strong> {{ $produit->descProduit }}</p>
            <p><i class="fas fa-image text-purple-500"></i> <strong>Image :</strong> <img src="{{ asset($produit->pathImg) }}" alt="Image" style="height: 100px;"></p>
            <p><i class="fas fa-calendar-plus text-pink-500"></i> <strong>Date de création :</strong> {{ $produit->created_at }}</p>
            <p><i class="fas fa-calendar-check text-indigo-500"></i> <strong>Date de mise à jour :</strong> {{ $produit->updated_at }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('produits.index') }}" style="background-color: #3498db; border-radius: 8px; color: white; padding: 8px 15px; text-decoration: none; transition: background-color 0.3s ease-in-out; display: inline-block;">
            Retour à la liste des produits
        </a>
    </div>

    <form action="{{ route('produits.destroy', ['idProduit' => $produits->idProduit]) }}" method="POST" style="display: inline;">
       @csrf
       @method('DELETE')
        <button type="submit" class="btn" style="background-color: #e74c3c; border-radius: 8px; color: white; padding: 8px 15px; text-decoration: none; transition: background-color 0.3s ease-in-out;">
            Supprimer
        </button>
    </form>


</div>
@endsection
