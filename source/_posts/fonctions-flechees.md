---
extends: _layouts.post
section: content
type: article
title: Fonctions fléchées en PHP 7.4
date: 2019-05-29
description: En savoir plus au sujet des fonctions fléchées ou fonctions courtes, fonctionnalité à venir
cover_image: /assets/img/fonctions_flechees_php_74.jpg
featured: true
categories: [php, developpement]
---

Les fonctions courtes, aussi appelées fonctions fléchées sont une nouvelles façon de coder les fonctions en PHP. Cette pratique est très intéressante lorsqu'il s'agit de passer des fonctions aux fonctions telles que  `array_map`  ou  `array_filter`.

Cela ressemble à ceci:

```php
// Une collection d'articles
$articles = [/* … */];

$ids = array_map(fn($article) => $article->id, $articles);
```

Précédemment, on aurait eu à écrire ce code comme suit:

```php
$ids = array_map(function ($article) {
    return $article->id;
}, $articles);
```

Comment utiliser les fonctions fléchées ? Voici un bref résumé:

-   Disponible à partir de PHP 7.4
-   Commence par le mot clé `fn`
-   Elles ne peuvent avoir qu'_une_ seule expression, laquelle est le retour de fonction
-   Le mot clé `return` n'est pas permis
-   On peut préciser les arguments et le type de retour

L'exemple suivant montre une manière d'écrire une fonction strictement typé:

```php
$ids = array_map(fn(Post $article): int => $article->id, $articles);
```

<div>
	<ins class="adsbygoogle"
	    style="display:block"
	    data-ad-client="ca-pub-9554638137229612"
	    data-ad-slot="9573950571"
	    data-ad-format="auto"
	    data-full-width-responsive="true"></ins>
	<script>
	    (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

Notez ces deux informations:

-   La déstructuration y est permise
-   Les références aussi, que ce soit pour les arguments ou le retour de fonction

Si l'on souhaite retourner une valeur par référence, on devrait le faire comme suit:

```php
fn&($x) => $x
```

En résumé, les fonctions fléchées offrent les même possibilités attendues de fonctions normales, à la différence de ne permettre d'être écrite qu'en une seule expression.

## Pas de multi-ligne

Puisque l'on ne peut avoir _une_ seule expression, cela signifie que nous ne pourrions écrire notre code que sur une seule ligne.

Les fonctions sur plusieurs lignes sont définies comme étant verbeuses; avoir la possibilité d'ignorer deux mots clés (`function` et `return`) ne font quand même pas une différence bien importante.

C'est donc à vous de décider. S'il arrive que la fonction à écrire ne comporte qu'une seule expression, et que l'on veuille la raccourcir, on peut en profiter, mais pour le reste, on sait déjà quoi faire.

Sans doutes plus tard nous aurons la possibilité d'écrire sur plusieurs lignes, comme avec notre bon JavaScript.

## La portée

Une différence majeure entre les fonctions courtes et celle qui sont normales réside dans le fait que celles-ci n'exige pas l'utilisation du mot clé `use` pour accéder à certaines données externes à la fonction.

```php
$increment = 5;

array_map(fn($x) => $x * $increment, $nombres);
```

Il est à noter qu'il n'est cependant pas possible d'apporter des modifications aux données externes. La liaison à ces données n'est pas par référence. Cela signifie que même si nous essayons de changer la valeur de `$increment` dans l'exemple précédent, cela n'affecterait pas la variable externe.

Une exception est faite lorsque l'on utilise le mot clé  `$this`, lequel agit de la même manière qu'avec les fonctions normales:

```php
array_map(fn($x) => $x * $this->increment, $nombres);
```

<div>
	<ins class="adsbygoogle"
	    style="display:block"
	    data-ad-client="ca-pub-9554638137229612"
	    data-ad-slot="9573950571"
	    data-ad-format="auto"
	    data-full-width-responsive="true"></ins>
	<script>
	    (adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

## Possibilités à venir

La possibilité d'écrire sur plusieurs lignes est à venir. Une autre idée serait la possibilité d'utiliser les fonctions fléchées pour les méthodes de classes, comme les getters et setters:

```php
class Article {
    private $titre;

    fn getTitre() => $this->titre;
}
```

En conclusion, les fonctions fléchées sont les bienvenue, mais ont encore besoin d'être améliorées, surtout pour le mutli-ligne.

S'il y a des questions, je reste joignable sur cette [page](/contact/).
