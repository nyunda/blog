---
extends: _layouts.post
section: content
type: article
title: Laravel 6.0 est finalement là
date: 2019-09-05
description: Présentation des nouveautés qu'apporte le nouvelle version majeur de Laravel, la version 6. Dans cet article, je vous présente les principales fonctionnalités.
cover_image: /assets/img/laravel6-0.png
social_image: /assets/img/laravel6-0s.png
featured: false
categories: [laravel, developpement]
---

Depuis le 3 septembre 2019, l’équipe en charge du développement de Laravel a annoncé avec joie la sortie publique de la 6e version majeure du framework Laravel. Laravel a toujours utilisé la version majeure pour le changement de noyau, mais pour cette 6e version, c’est surtout le passage vers le [Versionning Semantique (semver)](https://semver.org/lang/fr/) qui fait que la version monte.

Cette version marque donc le début de l'utilisation du versionning sémantique, mais aussi la compatibilité avec [Laravel Vapor](https://vapor.laravel.com/), qui fut annoncé lors de la dernière Laracon, une plateforme de déploiement sans serveur pour Laravel, supportant les montées de charge en offrant une mise en échelle automatique à la demande sans aucune maintenance ou gestion manuelle du serveur, et alimentée par les Services Web d’Amazon.

Un tout nouveau logo, un nouveau site... un rebranding.

[![Nouveau site laravel.com](/assets/img/laravel6-1.png)](/assets/img/laravel6-1.png)

## Laravel 6.0 est la nouvelle version à support à long terme (ou LTS en anglais)

Cette sortie marque le changement de version à support long dans le temps pour le framework, avec le correctif de bugs jusqu’au 3 septembre 2021 et correctifs de sécurité jusqu’au 3 septembre 2022. Le tableau suivant présente les versions et les périodes pendant lesquelles elles seront supportées :

| **Version** | **Release** | **Bug Fixes Until** | **Security Fixes Until** |
|--|--|--|--|
| 5.5 (LTS) | August 30th, 2017 | August 30th, 2019 | August 30th, 2020 |
| 5.6 | February 7th, 2018 | August 7th, 2018 | February 7th, 2019 |
| 5.7 | September 4th, 2018 | August 30th, 2019 | September 4th, 2019 |
| 5.8 | February 26th, 2019 | August 26th, 2019 | February 26th, 2020 |
| 6.0 (LTS) | September 3rd, 2019 | September 3rd, 2021 | September 3rd, 2022 |

## Amélioration des réponses retournées lors du traitement des autorisations

Précédemment, il était difficile de présenter à l’utilisateur des messages d’erreur lors de vérifications des autorisations d’accès ; c’est maintenant plus simple d’informer un utilisateur sur le pourquoi d’une certaine autorisation ou non autorisation. Une nouvelle méthode voit donc le jour `Gate::inspect`, une méthode qui apporte des retours intéressants à la politique d’autorisation d’accès. Voici un exemple :

```php
$response = Gate::inspect('view', $vol);

if ($response->allowed()) {
    // L’Utilisateur est autorisé à voir les informations sur le vol...
}

if ($response->denied()) {
    echo $response->message();
}
```

## Les Lazy Collections

Déjà heureux avec les collections du framework Laravel. Les Lazy Collections apportent une nouveauté toute particulière aux Collections des modèles de Laravel Eloquent. Une nouvelle classe `Illuminate\Support\LazyCollection` permet à PHP d'occuper moins d’espace mémoire lors du traitement de données de taille. La documentation officielle au sujet des [Lazy Collections](https://laravel.com/docs/6.0/collections#lazy-collections) présente cette nouvelle fonctionnalité avec beaucoup plus de détails.

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

## Des sous requêtes Eloquent renforcées

Laravel 6.0 introduit un support beaucoup plus amélioré des sous-requêtes. Imaginons par exemple que l’on a une table pour les `Destinations` et une autre pour les vols menant à ces destinations. La table `Vols` contient la colonne `arrived_at` qui indique quand les vols arrivent à destination.

En utilisant les sous requêtes via la nouvelle fonctionnalité en Laravel 6.0, on pourrait sélectionner toutes les destinations et les identifiants des vols récents et produire qu’une seule requête :
```php
return Destination::addSelect(['vols_recents' => Vol::select('code')
    ->whereColumn('destination_id', 'destinations.id')
    ->orderBy('arrived_at', 'desc')
    ->limit(1)
])->get();
```

En plus, on peut utiliser cette nouvelle fonctionnalité ajoutée au Query Builder pour ordonner les destinations en fonction de la date des vols les plus récents, et ne générer qu’une seule requête à la base des données :

```php
return Destination::orderByDesc(
    Flight::select('arrived_at')
        ->whereColumn('destination_id', 'destinations.id')
        ->orderBy('arrived_at', 'desc')
        ->limit(1)
)->get();
```

Ces exemples sont directement tirés de la documentation officielle de Laravel 6.0 présentant cette fonctionnalité.

## Laravel UI

La partie front-end de Laravel avait l’habitude d’être proposé avec Laravel, mais plus maintenant. Le front-end fait maintenant partie d’un package que l’on peut installer séparément via composer : `laravel/ui`. Cela permet à ce nouveau package d’être développé séparément et versionné en dehors de Laravel.

Resultat : plus de code Bootstrap ou Vue.js présent par défaut dans le framework, et on note aussi la disparition de la commande `make:auth`. Pour retrouver Bootstrap ou Vue, il faut installer le package `laravel/ui` via composer et utiliser la nouvelle commande `ui` pour y accéder :

```
composer require laravel/ui
php artisan ui vue --auth
```

En apprendre davantage

Vous pouvez dès à présent démarrer un projet sous Laravel 6.0 via laravel CLI :

```
laravel new poject
```

Voici des liens importants pouvant aider si tu veux en savoir plus sur Laravel 6 (en anglais) :

- [Note de sortie de Laravel 6](https://laravel.com/docs/6.0/releases)
- [Guide de passage à Laravel 6](https://laravel.com/docs/6.0/upgrade)

Si cet article vous a été utile, ne manquez pas de me laisser un mot sur ma page de [contact](/contact). S’il y a des questions, je suis prêt à y répondre… Je promets de répondre à toutes les questions. En attendant, merci d’être arrivé jusqu’au bout de cet article, et au prochain article.
