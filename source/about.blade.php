@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>Autres</h1>

    <p>My name is {{ $page->owner->name }}</p>

    <h2>Index pour Crypto:</h2>

    <ul>
        <li><a href="https://angular.io/" target="_blank">Angular</a></li>
        <li><a href="https://material.angular.io/components/categories" target="_blank">Components</a></li>
    </ul>

    <h2>Index pour conception rapport:</h2>

    <ul>
        <li><a href="https://cloudinary.com/" target="_blank">Cloudnary (hebergeur d'images)</a></li>
        <li><a href="https://www.netlify.com/" target="_blank">Netlify (hebergeur web + nom de domaine)</a></li>
    </ul>

    <h2>Liens:</h2>

    <ul>
        <li><a href="https://crypto.fr" target="_blank">Crypto</a></li>
        <li><a href="https://github.com/VlaDeveloppeur" target="_blank">GitHub</a></li>
    </ul>
@endsection
