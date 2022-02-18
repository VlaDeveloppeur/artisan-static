---
title: 02 - Première mission, création de la liste de contrat de location
date: 2021-11-20
image: https://res.cloudinary.com/den5s58yx/image/upload/v1645197873/Crypto/Capture_d_%C3%A9cran_du_2021-12-16_17-45-19_p5murz.png
comments: false
---
Suite à l'initialisation du Projet, nommé MyCoV2 une tâche m’est directement attribuée, je suis sur le projet comme les autres.

Le projet est développé en Typescript avec le framework Angular.

La tâche qui m’est confiée est le développement d’une page qui liste les locataires grâce au web service `ListLocataire`.

En effet, nous utilisons un `webservice` pour récupérer les données de la base 4D que l’on va utiliser dans le projet.

L’interface doit logiquement est similaire aux autres listes présentes sur le site.

La possibilité de faire des tris, une recherche simple et une recherche en tapant CTRL+U est possible.

Pour cela j’ai créé permis de très nombreux modules, un nouveau nommé Locataire qui vas contenir `listLocataire` et ensuite `printLocataire`



## HTML (and XML)

```html
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
```

## CSS

```css
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
```

## JS

```js
window._ = require('lodash');
window.Popper = require('popper.js').default;

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
```

## PHP

```php
<?php

namespace App\Http\Controllers;

use App\Status;

class LikeController extends Controller
{
    public function store(Status $status)
    {
        if (!$status->of_friend || $status->liked) {
            return response()->json(['flash' => 'Invalid operation.'], 422);
        }

        auth()->user()->like($status);

        return response()->json('liked', 201);
    }

    public function destroy(Status $status)
    {
        auth()->user()->unlike($status);

        return response()->json('unliked', 200);
    }
}
```

## Apache

```apache
<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>
```