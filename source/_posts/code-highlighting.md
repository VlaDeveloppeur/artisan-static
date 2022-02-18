---
title: 02 - Première mission, création de la liste de contrat de location
date: 2021-11-20
image: https://res.cloudinary.com/den5s58yx/image/upload/v1645197873/Crypto/Capture_d_%C3%A9cran_du_2021-12-16_17-45-19_p5murz.png
comments: false
---
Suite à l'initialisation du Projet, nommé MyCoV2 une tâche m’est directement attribuée, je suis sur le projet comme les autres.

Le projet est développé en **Typescript** avec le framework **Angular**.

La tâche qui m’est confiée est le développement d’une page qui liste les locataires grâce au web service `ListLocataire`.

En effet, nous utilisons un `webservice` pour récupérer les données de la base 4D que l’on va utiliser dans le projet.

L’interface doit logiquement est similaire aux autres listes présentes sur le site.

La possibilité de faire des tris, une recherche simple et une recherche en tapant CTRL+U est possible.

Pour cela il y a de très nombreux modules, je crée un nouveau nommé Locataire qui vas contenir `listLocataire` et ensuite `printLocataire` que l'on verra par la suite.

## Extrait HTML DE `liste-locataire.component.html`

```html
<ng-keyboard-shortcuts [shortcuts]="shortcuts"></ng-keyboard-shortcuts>
<ng-keyboard-shortcuts-help [key]="'ctrl + u'" [closeKey]="'escape'" [title]="'Recherche Locataire'">
</ng-keyboard-shortcuts-help>

<mat-card class="card-locataire">
    <mat-card-content class="h-100">

    <div class="row">
        <app-search 
        class="col-12 col-md-4 offset-md-4 right"
        [dataSource]=dataSourceTable 
        [classDefault]="false" 
        [dataFieldSearch]=locataireListTable 
        [urlRequete]="'Locataire/listLocataire'"
        (tableData)="dataSearch($event)" 
        (loading)="requestLoad($event)">
        </app-search>

        <div class="col-md-4 right d-none d-sm-block">
            
        </div>
    </div>

        <span class="pagiSpace d-block d-sm-none"></span>

        <div *ngIf="!loading">
            <mat-spinner></mat-spinner>
        </div>
    </mat-card-content>

</mat-card>
```

## Extrait TS de `liste-locataire.component.html`

```typescript
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