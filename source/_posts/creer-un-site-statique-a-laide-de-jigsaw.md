---
extends: _layouts.post
section: content
type: article
title: Créer un site statique à l’aide de Jigsaw
date: 2019-09-20
description: Créer un site web statique n'a jamais été aussi facile pour les développeurs qui veulent profiter des automatismes tout en restant proche de l'envoronnement Laravel. Cet article vous montre comment débuter avec Jigsaw
cover_image: /assets/img/jigsaw-article.png
social_image: /assets/img/jigsaw-article.png
featured: true
categories: [php, developpement, laravel]
---

Se lancer dans la création des sites web grâce aux générateurs des sites statiques, mais en restant proche de l’environnement **Laravel** et son gestionnaire de template, **Blade** est possible, oui, grâce à Jigsaw.

C’est vrai, il existe une tonne de générateur des sites statiques. Alors, pourquoi choisir [Jigsaw](https://jigsaw.tighten.co/) ?

-	Gestionnaire de template identique à celui des applications Laravel
-	[Laravel Mix](https://laravel-mix.com/) et tout ce qui va avec pour l’environnement de développement
-	Ecosystème familier pour les développeurs Laravel
-	Très facile à mettre en place

[Jigsaw](https://jigsaw.tighten.co/) peut être considéré comme un framework fait pour la création des sites statiques avec le même environnement que celui qui nous permet de créer des applications super puissantes.

Voici le requis pour pouvoir profiter de la puissance de ce framework pour sites statiques, [Jigsaw](https://jigsaw.tighten.co/): **PHP 7.1+**, **Node** et **npm**.

Si vous êtes sur Windows, vous pouvez vous faciliter la tâche en utilisant Laragon, l’utilitaire pour environnement de développement local, qui vous apporte **PHP 7.3**, **Node** et **npm** ou **yarn**.

<div>
	<ins class="adsbygoogle"
		style="display:block; text-align:center;"
		data-ad-layout="in-article"
		data-ad-format="fluid"
		data-ad-client="ca-pub-9554638137229612"
		data-ad-slot="7099792489"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

J’ai écrit un article présentant **Laragon**, et comment vous pouvez vous en procurer :

> [Pourquoi choisir Laragon pour son environnement de développement local](/blog/pourquoi-choisir-laragon-pour-environnement-de-developpement)

Si vous avez tous les requis avec vous, vous pouvez alors commencer par créer et initialiser le projet comme suit :

```bash
$  mkdir mon_blog & cd mon_blog
$  composer require tightenco/jigsaw
$  .\vendor\bin\jigsaw init
```

Pour l’initialisation d’un blog ou une documentation pour un projet, utilisez les commandes suivantes :

`.\vendor\bin\jigsaw init blog` ou `.\vendor\bin\jigsaw init doc`

Dès que fini, votre site statique est initialisé. Vous pouvez maintenant le compiler et l’exécuter pour vérifier que tout va bien.

```bash
$  npm run build
$  npm run serve
```

L’exécution de la deuxième commande ouvrira directement votre navigateur principal et vous exécutera le site à l’adresse `http://localhost:8000`, et le site fonctionnant correctement.

## Configuration du site

Les premières modifications s'effectuent à partir du fichier `config.php` (pour la config locale) et `config.production.php` (pour la config du site en ligne) se trouvant à la racine du projet.

<div>
	<ins class="adsbygoogle"
		style="display:block; text-align:center;"
		data-ad-layout="in-article"
		data-ad-format="fluid"
		data-ad-client="ca-pub-9554638137229612"
		data-ad-slot="7099792489"></ins>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
</div>

La modification du modèle ou template de pages et le contenu est facile. Dans l’arborescence du projet initialisé, vous trouverez le dossier `\source\` et ensuite le dossier `\_layouts\`, dans lequel vous trouvez le fichier `master.blade.php` (fichier modèle de base pour les pages).

À la racine du dossier `source/` vous pouvez trouver le fichier `index.blade.php` qui est, comme le nom l’indique, la page index, la racine du site. Allez le modifier comme bon vous semble.

Pour ce qui est de la présentation visuelle ou graphique du site, il suffit de se rendre dans le dossier `assets\buid`, vous y trouverez les fichiers css et js généré. Mais, les originaux, je me permets de le dire, vous les trouvé sans le dossier `_assets`.

Après modification, il suffit de recompiler par `npm run build` et `npm run serve` pour voir les modifications prendre effet. Vous pouvez vous éviter cette répétition constante en lançant la commande `npm run watch` qui recompilera votre projet après chaque modification. Tout cela est rendu possible par **webpack** et **browsersync**.

## Enfin

Si vous êtes satisfait du résultat, vous pouvez lancer la commande `npm run production` qui lancera la compilation de votre projet, réduisant la taille des fichiers css et js, et générant les pages pour une publication sur votre serveur, le dossier public. Le résultat de cette commande, vous pouvez le trouver dans le dossier `\build_production`.

Pour des détails beaucoup plus complets à ce sujet, prière de jeter un coup d’œil sur la documentation officielle du framework [Jigsaw](https://jigsaw.tighten.co/ et la suivre pas à pas.


S'il y a des questions, je reste joignable sur cette [page](/contact/).
