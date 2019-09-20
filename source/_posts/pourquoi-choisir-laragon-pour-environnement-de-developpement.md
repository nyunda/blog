---
extends: _layouts.post
section: content
type: article
title: Pourquoi choisir Laragon pour son environnement de développement local
date: 2019-09-17
description: Après avoir travaillé sur bien des projets web à l’aide des plusieurs utilitaires pour environnement de développement local, je vous présente Laragon, un utilitaire presque complet et très utile, et vous présente aussi quelques-unes de ses fonctionnalités
cover_image: /assets/img/laragon-article.png
featured: true
categories: [developpement, autres]
---

J’ai travaillé sur bien des projets web, utilisé beaucoup d’utilitaires me permettant d’avoir PHP, MySQL et Apache rapidement, et tout allait bien pour moi. Puis, mes besoins ont changé, et ma demande aussi. J’avais besoin d’un équivalent à Laravel Valet pour les utilisateurs Mac sur Windows.

En effet, Laravel Valet permet de facilement transformer son environnement de développement local en quelque chose de bien plus évolué et plus pratique pour tester son code comme s’il était sur le serveur final : **nom de domaine local**, **certificat SSL** (https), partage public du code local, **ngnix**, etc. ([Laravel Valet](https://laravel.com/docs/6.x/valet))

Je suis un développeur paresseux, oui… Quand on peut automatiser des tâches, pourquoi ne pas en profiter ? Je me suis donc mis à rechercher des outils me permettant d’avoir tout ce qu’offre Laravel Valet, mais sur Windows. C’est alors que j’ai découvert [Laragon](https://laragon.org), et depuis je n’ai pu le lâcher. Vous comprendrez pourquoi grâce à ses particularités, que voici.

[![Laragon Site](/assets/img/laragon-site.png)](/assets/img/laragon-site.png)

## 1. Rapidité d’exécution et de démarrage de projets

Laragon fait bien son travail, et avec une vitesse phénoménale, c’est extraordinaire. Bien qu’il n’apporte pas toutes les fonctionnalités qui puissent exister, Laragon gagne ses combats face à ses concurrents : **EasyPHP**, **Wamp**, **Xampp**, **Bitnami**, etc. En plus d’être rapide, Laragon vous permet de créer vos projets en un clic, que ce soit Laravel, WordPress, Symfony, Drupal, etc.

## 2. Laragon apporte un support SSL

Le support SSL est vraiment important pour le développement parfait et test de ses applications en local. Et Laragon crée automatiquement les certificats SSL pour vos projets.

## 3. Laragon est hackable

Hackable ou customisable, Laragon vous donne la possibilité de facilement mettre à jours vos applications, la totale. Besoin de tester PHP 7.4, facile… Il suffit de le télécharger de de l’ajouter dans Laragon. Besoin d’une version plus récente de MySQL, pareille chose. Que du régal.

## 4. Laragon vient avec une console (terminal) qui nous fait oublier Linux

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

Peut-être pas oublier totalement Linux, mais un peu. L’utilitaire **Cmder**, qui vient par défaut avec Laragon est très intéressant pour ceux qui veulent profiter des fonctionnalités qu’offrent Bash, console principale sur Linux. Vous avec même un gestionnaire SSH à portée de main, et le gestionnaire de versions GIT. Difficile de revenir à CMD après avoir gouté à Cmder. Et Laragon vous l’apporte sans vous demander quoi que ce soit.

[![Terminal Laragon](/assets/img/laragon-terminal.png)](/assets/img/laragon-terminal.png)

## 5.	Laragon n’est plus dédié à PHP et Laravel

Ça l’était au départ, mais plus maintenant. Avec l’apport de beaucoup des contributeurs à ce projet, vous pouvez maintenant gérer vos projet Go, Java, Python, Ruby, NodeJs.

## 6.	Et bien d’autres outils

Je ne pourrais tout citer comme fonctionnalités qu’apporte Laragon, puisque j’en découvre une nouvelle chaque jour. Des fonctionnalités vous permettant de gérer caches, mails sortants, connexions par SSH, codes sources, partages de codes, etc. Je peux donc citer notamment [Redis](https://redis.io/) et [Memcached](https://memcached.org/), [Ngrok](https://ngrok.com/), **sendmail**, [heidisql](https://www.heidisql.com/), [putty](https://www.putty.org/), [notepad++](https://notepad-plus-plus.org/fr/) (que je remplace tout de suite par [Sublime Text](https://www.sublimetext.com/3) et [VS Code](https://code.visualstudio.com/)), **telnet**, [winscp](https://winscp.net/), etc.

> Lien de téléchargement de [Laragon](https://laragon.org/download/)

[![Télecharger laragon](/assets/img/laragon-download.png)](/assets/img/laragon-download.png)

[![Installation 1](/assets/img/installation-1.png)](/assets/img/installation-1.png)

[![Installation 2](/assets/img/installation-2.png)](/assets/img/installation-2.png)

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

[![Installation 3](/assets/img/installation-3.png)](/assets/img/installation-3.png)

[![Laragon 1](/assets/img/laragon-1.png)](/assets/img/laragon-1.png)

[![Laragon 2](/assets/img/laragon-2.png)](/assets/img/laragon-2.png)

On peut conclure et dire que Laragon est maintenant un environnement de développement universel. Après installation de la version de base, vous pouvez ajouter git, phpmyadmin, Node.js/MongoDB, Python/Django/Flask/Postgres, Ruby, Java, Go très facilement.

S'il y a des questions, je reste joignable sur cette [page](/contact/).