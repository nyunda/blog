---
extends: _layouts.post
section: content
type: article
title: Présentation de chocolatey, un gestionnaire de paquets pour l’environnement Windows
date: 2019-11-11
description: A-t-on vraiment besoin du JavaScript en tant que développeur Web ? Il y a plusieurs années, cela n’était vraiment pas requis, puisque le besoin en expérience utilisateur n’était pas aussi important qu’aujourd’hui. Cet artice explique pourquoi il est important de tenir compte du JavaScript aujoud'hui pour offir une expérience meilleure à nos utilisateurs.
cover_image: /assets/img/chocolatey.jpg
social_image: /assets/img/chocolatey.jpg
featured: true
categories: [autres, windows]
---

Chocolatey est un gestionnaire de paquets open source pour l’environnement Windows qui permet d’installer un ou plusieurs logiciels, de les mettre à jour ou les désinstaller en une seule commande. Tout comme les gestionnaires de paquets disponible pour les environnements linux (yum, apt-get, etc) et mac (homebrew et autres), chocolatey sert aux utilisateurs de Windows et permet de se passer de Windows Store.

## Un gestionnaire de paquets, qu’est-ce ?

Imagine que tu souhaites installer un logiciel qui nécessite bien d’autres applications pour fonctionner correctement, tel que Java, Microsoft C++, Dot Net Framework, etc. Tu es donc obligé de télécharger et installer ces autres logiciels et reprendre l’installation de celui dont tu avais réellement besoin. C’est ce que l’on appelle couramment dépendance logiciel. Un gestionnaire d’application solutionnerait à ce problème en installant automatiquement les dépendances d’un logiciel que tu veux installer.

Sous un environnement Linux, ce principe existe déjà par défaut, et ce depuis longtemps pour rendre facile l’installation des logiciels ou paquets. Sur Mac, homebrew permet aussi de le faire, ce qui facilite grandement la tâche. Bien plus populaire, nous avons les magasins d’applications, qui ont pour principe de permettre d’installer, désinstaller des applications contrôlées. Nous parlons notamment de Google Play sur Android, App Store sur iOS, macOS et iPadOS ou encore le pauvre Windows Store sur Windows 1O. Le principe est le même dans bien d’autres plateforme tels que ceux permettant d’installer des jeux.

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

## Pourquoi Chocolatey ?

Chocolatey est un gestionnaire de paquets (désolé de me répéter, mais c’est important de le noter). Il sert à mettre en place des automatismes impressionnants pour l’installations des logiciels pour votre ordinateur personnel ou pour les entreprises. Il a la possibilité de travailler directement avec le registre Windows, de gérer les fichiers ou de modifier les configurations, le tout en passant par PowerShell.

Combien de fois as-tu entendu parler d’une application ou outils de la part d’un ami, et que tu souhaiterais tester ? Quelle quantité d’efforts as-tu déjà dépensé pour te trouver toutes les dépendances d’un logiciel que tu souhaites installer ? On ne se rend pas compte du temps dépensé en faisant les choses manuellement, et pire, faire la même chose : Suivant, suivant, suivant et Terminer. Oui, c’est fatiguant, mais aussi un passage obligé… du moins, jusqu’à aujourd’hui.

Avec Chocolatey, tout est facile, il suffit d’indiquer l’application ou les applications à installer et tout est fait pour vous…même les dépendances sont installées. On ne te demande rien d’autre d’une connexion internet pour installer ses logiciels. J’ai bien dit, rien d’autre. Ainsi, pendant que Chocolatey fait le gros du travail, tu pourrais aller préparer et consommer quelques tasses de café, dormir ou faire autre importante chose.

Peut-être que ça ne paraît pas très puissant suivant ces précédents dires, mais imagine que tu dois mettre à jour tous tes logiciels, récupérer les dernières mis à jour de sécurité ou les dernières versions, comment procèdes-tu ?

1.	Rechercher la version la plus récente du logiciel
2.	S’assurer et espérer de sélectionner le bon setup
3.	Attendre la fin du téléchargement
4.	Dezipper les fichiers
5.	Suivre la procédure d’installation (Suivant, Suivant, Suivant…)
6.	Espère ne pas s’être trompé en installant un virus
7.	Refaire le même exercice pour tous les autres logiciels

La routine, la fatigante routine. Voici à quoi ressemble cette routine avec Chocolatey :

1.	Ouvrir une ligne de commande (CMD par exemple)
2.	Ecrire `choco upgrade all -y`
3.	Laisser faire et s’en aller
N’hésitez pas, et installer Chocolatey pour le tester. L’installation est toute simple. Rendez§vous sur le lien suivant et suivez les instructions pour l’installer :

> https://chocolatey.org/docs/installation

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

## Application les plus souvent installé à l’aide de Chocolatey

Voici une liste des applications que j’utilise au quotidien, et qu’il est possible d’installer via Chocolatey 

-	`choco install chrome` – Navigateur web Google Chrome
-	`choco install github` – Client officiel de Github avec interface graphique
-	`choco install 7zip` – utilitaire de compression et decompression d’archives zip, tar, gz, bzip et autres.
-	`choco install SublimeText3` – Excellent et ultra rapide éditeur de code.
-	`choco install vlc` – Lecteur média open source
-	`choco install laragon`  – utilitaire pour environnement de développement Laravel
-	`choco install firefox` – Navigateur web de Mozilla
-	`choco install vagrant` – Utilitaire pour la virtualisation
-	`choco install phpstorm` – IDE PHP hors normes

Merci d’avoir pris le temps de lire cet article. Si tu es intéressé par cet outil, c’est très bien… Il ne sera plus question de sombrer dans la routine du clic sur le bouton Suivant.

Si tu as pris plaisir à me lire, merci de partager l’article pour aider les autres à découvrir Chocolatey ou écrivez-moi un commentaire sur Facebook.

## Références

-	[Site official du gestionnaire du paquet pour Windows](https://chocolatey.org)
-	[Liste des packages sur chocolatey.org](https://chocolatey.org/packages)