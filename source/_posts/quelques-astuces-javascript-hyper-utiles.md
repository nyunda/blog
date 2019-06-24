---
extends: _layouts.post
section: content
type: article
title: Quelques astuces pour se faciliter la vie avec le JavaScript
date: 2019-05-23
description: Présentation de quelques trucs et astuces peu connus, mais pouvant vous faciliter grandement la tâche.
cover_image: /assets/img/post-cover-image-2.png
featured: false
categories: [javascript, developpement]
---

Comme tout les langages de programmation, JavaScript a un tas de trucs et astuces pouvant vous faciliter grandement la tâche ou pour mieux dire, les tâches. Certaines sont connues et paraissent ultra simples, tandis que d'autres sont hyper bluffantes. Aujourd'hui, je vais vous en faire découvrir quelques-un.

## Récupérer les valeurs uniques d'un tableau (Array)

Récupérer les valeurs uniques d'un tableau n'a jamais été aussi facile, bien plus que vous ne pouviez vous l'imaginer :

```js
let valeursUniques = [...new Set([1, 2, 3, 3])]
>> [1, 2, 3]
```
Mais quelle facilité déconcertante 😎 ! Tout cela grâce à l'objet `Set` (ensemble en français) permettant de stocker des valeurs uniques de n'importe quel type, que ce soit des valeurs d'un type primitif ou des objets.

## Tableau et Boolean

Besoin de filtrer un tableau pour ne garder que des valeurs non `null` ou similaire (`0`,  `undefined`,  `null`,  `false`, etc.) ?
```js
monTableau
    .map(item => {
        // ...
    })
    // Chasser les valeurs nulles
    .filter(Boolean);
```
En passant comme paramètre `Boolean` et voilà que l'on n'a plus à faire aux valeurs nulles.

## Créer des objets véritablement vide (empty)

C'est vrai, on peut le faire simplement avec `{}`, mais il y a un soucis, l'objet aura toujours un `__proto__` et la fonction habituelle `hasOwnProperty` ainsi que tant d'autres. Cependant, une méthode existe, et vous permet de créer des objets vides, des pures objets dictionnaires.
```js
let dict = Object.create(null);

// dict.__proto__ === "undefined"
// Aucune propriété n'existe tant qu'on ne l'a pas ajouté vonlontairement
```
Il n'y a absolument rien d'existant dans cet objet jusqu'à ce que l'on pense en ajouter !

## Fusionner des objets

Le besoin de fusionner plusieurs objets en JavaScript existe depuis des lustres, surtout lorsqu'est arrivé la création des classes et widgets avec options. Voici donc comment cela est possible, aussi simplement que possible :
```js
const agent = { nom: 'Jane Doe', sexe: 'Feminin' };
const outils= { ordinateur: 'Mac', editeur: 'Vim' };
const traits = { gentillesse: 'Extreme', cheveullure: 'Brun', yeux: 'Bleu' };

const resume = {...agent, ...outils, ...traits};
/*
Object {
  "cheveullure": "Brun",
  "editeur": "Vim",
  "sexe": "Feminin",
  "gentillesse": "Extreme",
  "nom": "Jane Doe",
  "ordinateur": "Mac",
  "yeux": "Bleu",
}
*/
```
Les trois points nous facilitent grandement la tâche.

## Exiger un paramètre à une fonction

La possibilité d'ajouter des valeurs par défaut a été un ajout de qualité à notre beau JavaScript, mais cette astuce vous permettra d'exiger un argument à une fonction :
```js
const requis = () => { throw new Error('paramètre requis'); };

const bonjour = (nom = requis()) => { console.log(`Bonjour ${nom}`) };

// Une erreur sera générée si le paramètre _nom_ n'est pas passé à la fonction
bonjour();

// Ceci générera aussi une erreur
bonjour(undefined);

// Ceux-ci, non !
bonjour(null);
bonjour('Janet');
```
Ce sont des validation d'un niveau supérieur 😅 !

## Alias après déstructuration

La [déstructuration](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Op%C3%A9rateurs/Affecter_par_d%C3%A9composition) a été bienvenue dans le JavaScript mais, des fois on préfère faire référence aux propriétés en utilisant des noms différents. Voici comment profiter de l'avantage apporté par les alias :
```js
const obj = { x: 1 };

// Donner obj.x à { x }
const { x } = obj;

// Donner obj.x à { nomDifferent }
const { x: nomDifferent } = obj;
```
Important pour éviter les conflits de nommage avec les variables déjà existantes.

Le JavaScript a beaucoup évolué au fil des années, mais ce qui fait de lui un langage du futur, prêt à conquerir le monde, c'est surtout les améliorations et nouveautés qui y sont ajoutées. Malgrè son évolution hyper dynamique, nous avons quand même besoin de connaître certaines astuces pour les utiliser au moment opportun.

Cet article vous a-t-il été utile ? Voulez-vous que j'écrive un autre concenant un sujet qui vous préoccupe particulièrement ? Alors, écrivez-moi un message sur ma page de [contact](/contact).
