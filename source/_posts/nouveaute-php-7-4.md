---
extends: _layouts.post
section: content
type: article
title: Nouveauté dans PHP 7.4
date: 2019-05-27
description: Principales nouveautés attendues dans le PHP 7.4, tout ce qu'il y a à savoir à ce sujet, sinon presque.
cover_image:
featured: true
categories: [php, developpement]
---

- Date de sortie : 28 Novembre 2019
- [Fonctions fléchées](#fonctions-flechees) pour des fonctions en une seule ligne
- [Préchargement](#prechargement) pour une amélioration des performances
- [Typage](#typage-de-proprietes) dans les classes
- L'[Opérateur d'association en cas de valeur nulle](#operateur-d-assiociation) en version courte
- [FFI](#ffi)  ouvre des nouvelles possibilités de création des extensions en PHP
- [Dépréciation](#depreciation-balise-d-ouverture) de l'ouverture de balise PHP courte
- Opérateur de décomposition [de tableaux](#operateur-de-decomposition)
- Et bien plus encore


## Fonctions fléchées [RFC](https://wiki.php.net/rfc/arrow_functions_v2) {#fonctions-flechees}

Les fonctions fléchées, que j'apprécie tant depuis que c'est apparu dans le JavaScript, permet de declarer des fonctions en une seule ligne.

```php
array_map(function (User $user) {
    return $user->id;
}, $users)
```

```php
array_map(fn(User $u) => $u->id, $users)
```

Tout comme dans le JavaScript, les fonctions fléchées ont quelques particularités:

-  Les variables de l'environnement parent y sont accessible, pas besoin d'utiliser le mot clé `use`.
-  `$this`  y est accessible comme dans les autres fonctions.
-  Les fonctions fléchées ne peuvent contenir qu'une seule et unique ligne, qui représente aussi le retour de fonction.

Un article beaucoup plus détaillé concernant les fonctions fléchées est en préparation.

## Typage de propriétés [RFC](https://wiki.php.net/rfc/typed_properties_v2) {#typage-de-proprietes}

Les variables de classes pourront être typées :

```php
class Foo {}

class A
{
	public string $nom;
	public Foo $bar;
}
```

Mais, il est à noter que l'autoloading devra être activé ou que la classe `Foo` devra être declarée plus tôt pour qu'elle puisse être utilisée comme type dans l'exemple ci-haut.

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

## Opérateur d'association en cas de valeur nulle [RFC](https://wiki.php.net/rfc/null_coalesce_equal_operator) {#operateur-d-assiociation}

Au lieu de faire ceci :

```php
$data['date'] = $data['date'] ?? new DateTime();
```

Il est possible de faire comme ceci :

```php
$data['date'] ??= new DateTime();
```

## Opérateur de décomposition de tableau ou Array Spread Operator en Anglais [RFC](https://wiki.php.net/rfc/spread_operator_for_array) {#operateur-de-decomposition}

Ce serait possible d'utiliser l'opérateur de décomposition de tableau en PHP :

```php
$tableau1= [1, 2, 3];

$tableau2 = [4, 5];

$resultat = [0, ...$tableau1, ...$tableau2, 6 ,7];
// [0, 1, 2, 3, 4, 5, 6, 7]
```

Il est à noter que ça ne marche que pour les tableaux aux clés numérique.

## Interface de fonction étrangère ou FFI [RFC](https://wiki.php.net/rfc/ffi) {#ffi}

L'interface de fonction étrangère, ou FFI en Anglais, permet d'appeler du code écrit en C côté utilisateur. Cela signifie que les extensions PHP pourront être écrite en pure PHP. On aura quand même besoin de s'y connaitre en C pour profiter pleinement de cette fonctionnalité, c'est donc un sujet complexe.

## Préchargement [RFC](https://wiki.php.net/rfc/preload) {#prechargement}

Un ajout très intéressant au PHP, pouvant apporter des une nette amélioration de performances.

Bref: si tu utiliser une framework aujourd'hui, ses fichiers ont besoin d'être chargés et recompilés lors de chaque requête. Le préchargement permettra au serveur de charger des fichiers PHP en mémoire à l'initialisation et les rendre accessible pour les futures requêtes.

Le gain en performance apporte avec lui un coût, pas le moindre: s'il y a des modifications dans les fichiers, le serveur aura besoin d'être redémarré.

## Priorité de concaténation [RFC](https://wiki.php.net/rfc/concatenation_precedence)

En codant quelque chose de semblable à ceci:

```php
echo "sum: " . $a + $b;
```

PHP interprété précédemment comme suit:

```php
echo ("sum: " . $a) + $b;
```

PHP 8 interprétera comme suit:

```php
echo "sum :" . ($a + $b);
```

PHP 7.4 avertira lorsqu'il rencontrera un expression non mise en parenthèse et contenant un '.' avant un '+' ou un '-'.

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

## Fonction `mb_str_split` ajoutée [RFC](https://wiki.php.net/rfc/mb_str_split)

Cette fonction apporte les même fonctionnalités que la fonction  `str_split`, mais sur des chaines de caractères à plusieurs octets.

## Dépréciation de l'utilisation de la courte balise d'ouverture [RFC](https://wiki.php.net/rfc/deprecate_php_short_tags) {#depreciation-balise-d-ouverture}

La balise d'ouverture courte  `<?`  est à présent dépréciée et sera supprimé dans PHP 8. La courte balise echo  `<?=`  n'est pas affectée.


## Enfin…

Si tu es toujours là depuis le début, ce que PHP t’intéresse et son futur encore plus.
Sois-donc à l'affût des prochains articles à ce sujet. Restons en [contact](/contact/).
