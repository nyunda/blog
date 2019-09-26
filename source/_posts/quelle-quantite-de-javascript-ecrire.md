---
extends: _layouts.post
section: content
type: article
title: Quelle quantité de JavaScript a-t-on vraiment besoin d’écrire pour un site web ?
date: 2019-09-26
description: A-t-on vraiment besoin du JavaScript en tant que développeur Web ? Il y a plusieurs années, cela n’était vraiment pas requis, puisque le besoin en expérience utilisateur n’était pas aussi important qu’aujourd’hui. Cet artice explique pourquoi il est important de tenir compte du JavaScript aujoud'hui pour offir une expérience meilleure à nos utilisateurs.
cover_image:
featured: true
categories: [autres, javascript, developpement]
---

A-t-on vraiment besoin du JavaScript en tant que développeur Web ? Il y a plusieurs années, cela n’était vraiment pas requis, puisque le besoin en expérience utilisateur n’était pas aussi important qu’aujourd’hui. On peut toujours se passer du JavaScript aujourd’hui, c’est vrai, mais pour offrir la meilleure expérience utilisateur possible, pas seulement la bonne, mais la meilleure, il faut passer par du JavaScript.

On peut donc dire qu’une pauvre implémentation du JavaScript ou un manque de JavaScript se résumerait par une expérience utilisateur simple, voire même médiocre. Les chargements des pages seraient lents à cause du manque de lazy loading (changement progressif du contenu de la page) par exemple ou on présenterait une application sans interaction avec le navigateur. La mise en place d’une expérience utilisateur de qualité grâce au JavaScript a un coût, et il peut être très important surtout si l’on est habitué backend et que l’on cherche à réaliser une grosse application.

Plusieurs options sont offertes pour la mise en place d’une expérience de qualité : écriture du code JavaScript pur tout en dépendant totalement du rendu serveur, l’utilisation d’un framework frontend, ou encore, la création d’une SPA (single page application : application en une seule page, ne se chargeant qu’une seule fois).

JavaScript pur et rendu serveur

Produire tout le code et traiter les données à partir du serveur, puis envoyer le résultat au client. Dans ce cas précis, on ne se focalise que sur la mise en place des données sur la page, on les reçoit et les affiche. L’écriture du JavaScript pur a pour avantage de rendre notre code totalement indépendant d’un quelconque framework.

Un de gros désavantage de cette pratique, ce que cela nous prend du temps et l’on a besoin d’être vraiment discipliné dans l’écriture de notre code, pour ne pas tomber dans un désordre considérable. Bref, le serveur se charge de tout ce qui concerne vues et les traitements tandis que le client se charge des interactions, actions de l’utilisateurs sur les données affichées.

Utilisation des frameworks

Le système des composants dans les frameworks modernes apportent une meilleure organisation au code et de l’encapsulation. C’est très pratique et c’est beaucoup plus simple à gérer dans le temps. Dans le cas où l’on dépend du rendu produit par le serveur, on se retrouve dans la même situation que lors de l’utilisation du JavaScript pur, puisqu’on laisse le serveur faire presque tout le travail. 

Mais, l’avantage avec les frameworks modernes, c’est surtout dans l’organisation du code JavaScript, mais quand on commence à tout déléguer aux frameworks, et qu’on laisse le serveur s’occuper du traitement brut des données, on finit par tomber dans la création d’une SPA.

Single page applications

Quand on parle des single page applications, on fait surtout allusion à ces applications pour lesquelles les styling, les interactions et la présentation des données sont effectués côté client ou par le client, et donc le JavaScript. Le serveur ne sert qu’à disponibiliser une API, et n’a aucune idée de comment l’interface se présente.

Une SPA apporte donc une expérience utilisateur bien plus évoluée, mais pour un coût important techniquement. Ainsi, leur utilisation se résume pour des cas bien particuliers : la consommation des API conçu pour les applications mobiles, la prise en charge du hors ligne, etc. Difficile à conseiller si l’on n’a pas des très bonnes raisons, surtout parce que cela ajoute une complexité énorme au projet.

Conclusion

De nos jours, l’expérience utilisateur prime et nous oblige à nous casser beaucoup plus les méninges pour rendre parfaite l’interaction des utilisateurs dans nos applications. Mais, on ne peut oublier le fait que dans bien des cas, il arrive que l’on soit obligé d’oublier le JavaScript, surtout à cause des connexions lentes et de l’utilisation des navigateurs tel que Opera Mini, en Afrique, en Inde et en Amérique latine.

En outre, dans bien des cas, les navigateurs beaucoup plus récents nous aident à écrire de moins en moins de code JavaScript pour certaines interactions, qui autrefois nous obligeaient d’avoir toujours notre vieil ami jQuery ou de les écrire totalement. Je parle notamment de la prise en charge : du scroll fluide, des variables et des animations avancées dans le CSS, etc.

Cet article vous a-t-il été utile ? Voulez-vous que j'écrive un autre concenant un sujet qui vous préoccupe particulièrement ? Alors, écrivez-moi un message sur ma page de [contact](/contact).