---
extends: _layouts.post
section: content
type: article
title: Comment créer et configurer un serveur cloud personnel sur Vultr (VC2)
date: 2019-09-12
description: Ce article vous présente quelques étapes à suivre pour créer un serveur cloud personnel sur Vultr facilement et à moindre coût
cover_image: /assets/img/article-10.png
social_image: /assets/img/article-10.png
featured: false
categories: [autres]
---

Créer et héberger un site web n’a jamais était aussi facile. Il fut un temps où les hébergements mutualisés étaient très populaires à cause du coût de maintenance des serveurs cloud chez des fournisseurs tels que Amazon Web Services (AWS), Google Cloud et Microsoft Azure, parmi les plus connus. Ces géants fournissent des services tels que le déploiement rapide et facile d’applications, les sauvegardes et restaurations, le support de gestion de bases des données, etc. Ce qui fait que ce soit très couteux.

Avec l’arrivé de nombreux fournisseurs dans le secteur, apportant avec eux des nouvelles offres, les services cloud sont maintenant à la portée de tout le monde. Si tu n’as besoin que d’un serveur cloud, tu peux facilement le créer via Vultr, Digital Ocean, Linode, etc. et ne pas être obligé de passer par les géants du Web. Ces nouvelles entreprises offrent des services de haut niveau et à des prix bas.

Ce qui peut sans doute faire mal, c’est le manque de backup, de gestion de déploiement, de bases des données, etc. Mais, c’est toujours possible de profiter d’autres fournisseurs de services pour la gestion de déploiements, de bases des données, des backups, etc. et ce, gratuitement. On peut donc avoir un serveur cloud personnel et la liberté de le configurer comme on veut (on peut même l’utiliser pour héberger des sites web en quantité, comme les hébergeurs mutualisés).

Dans cet article, je vous présenterai les étapes à suivre pour configurer un serveur cloud personnel sur Vultr. Notez que Vultr offre des serveurs cloud à partir de **$2,5** par mois.

## Etapes

### 1. Créer un compte sur Vultr
Etape importante, sans quoi on ne peut avancer. Vous pouvez créer un compte sur Vultr à partir de ce lien, et vous recevrez $50 pour tester la plateforme :

> [Lien pour accéder à Vultr](https://www.vultr.com/?ref=7794562-4F)

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

### 2. Ajouter vos informations de paiement

Après avoir créé le compte, vous pouvez maintenant y accéder. A partir de ce moment, vous pouvez créer un nouveau serveur en cliquant sur l’onglet Products ou sur le bouton + à droite de l’écran.
Mais, avant quoi que ce soit, il faut compléter les informations de paiement, ainsi finaliser l’installation du serveur. C’est donc important de commencer par ce lien :

> [Configurer un moyen de paiement](https://my.vultr.com/billing/)

Si vous n’avez pas encore une carte Visa ou MasterCard, c’est le moment de vous en procurer. Certains diront qu’il faut un compte bancaire que qu’ils n’ont pas assez de moyen pour en créer ou offrir de l’agent aux banquiers.

Mais, c’est possible d’avoir une carte sans comptes bancaire. Il suffit de vous procurer une carte prépayée, chez UBA ou EcoBank s’ils sont disponibles dans votre contrée. A partir de **6000FC** chez EcoBank, vous avez une carte prête à être utiliser pour vos achats sur internet, et en moins de 24h.

[![Configurer le moyen de paiement](/assets/img/billings_fresh.png)](/assets/img/billings_fresh.png)

Vous pouvez ajouter votre carte ou utiliser Paypal pour déposer au minimum **$10** dans votre compte pour utilisation ultérieure, et compléter cette partie. N’oubliez pas que si vous avez utilisé le lien présent en début de cet article, vous recevrez **$50** de bonus pour tester leurs services.

### 3. Créer une instance serveur

Vous pouvez maintenant créer et déployer une nouvelle instance serveur en cliquant sur l’onglet **Products** à gauche de l’écran.

[![Déploiement d'une nouvelle instance](/assets/img/products_fresh.png)](/assets/img/products_fresh.png)

Cliquez sur l’icône + pour démarrer les procédures [Icône plus](/assets/img/plus_button.png)

1. Sélectionnez la zone du Datacenter où sera logé le serveur que l’on souhaite créer. Ici, je choisirai New York (NJ). Mais, n’oubliez pas que plus le serveur est éloigné, plus élevé sera la latence d’accès aux ressources.

[![Datacenter](/assets/img/choosing_location.png)](/assets/img/choosing_location.png)

2. Sélectionnez à présent le type de serveur à créer. Vous pouvez choisir le système d’exploitation à installer et la version ; dans mon cas, je choisi Ubuntu 19.04 x64.

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

[![Server type](/assets/img/server_type.png)](/assets/img/server_type.png)

3. Les étapes 4, 5 et 6 sont optionnelles. Mais, les fonctionnalités qui y sont proposées peuvent vous être utiles. Dans le cas présent, nous passons seulement. Nous précisons quand même le Nom d’hôte du serveur (Server Hostname) et le Label

4. Nous pouvons finalement cliquer sur le bouton Deploy Now pour créer et déployer notre serveur.

[![Server type](/assets/img/hostname.png)](/assets/img/hostname.png)

### 4. Accéder à la Console

Après avoir patienté quelques minutes, le temps d’attente avant la création du serveur, nous pouvons à présent accéder au terminal et configurer le système. Commencez par cliquer sur l’onglet Products sur le menu à gauche, et vous verrez un nouveau serveur ajouté, cliquez dessus, puis cliquer sur l’icône représentant un écran sur le haut de la page, pour accéder à la console du serveur nouvellement créé.

[![Server type](/assets/img/web_console.png)](/assets/img/web_console.png)

Vous pouvez aussi accéder à la console du serveur nouvellement créé par SSH.

```bash
ssh [IP du serveur] -l [Nom d’utilisateur(root par défaut)]
Exemple:- ssh 192.283.283 -l root
```

## Bonus

Vous pouvez lier votre serveur à des services fornisseurs de services tels que Ploi.io, qui vous permettent de gérer d’administrer votre serveur sans avoir besoin de notions d’administration serveur, ou taper quoi que ce soit sur la console.

Dans le prochain article, je vous expliquerai comment lier votre serveur à Ploi.io pour l’administrer plus facilement.

Si tu es toujours là, ce que ça t'intéresse, reste-donc à l'affût des prochains articles à ce sujet. Et restons en [contact](/contact/).
