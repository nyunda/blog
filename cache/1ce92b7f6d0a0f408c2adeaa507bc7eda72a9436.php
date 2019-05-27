<?php $__env->startSection('content'); ?><p>Comme tout les langages de programmation, JavaScript a un tas de trucs et astuces pouvant vous faciliter grandement la tâche ou pour mieux dire, les tâches. Certaines sont connues et paraissent ultra simples, tandis que d'autres sont hyper bluffantes. Aujourd'hui, je vais vous en faire découvrir quelques-un.</p>
<h2>Récupérer les valeurs uniques d'un tableau (Array)</h2>
<p>Récupérer les valeurs uniques d'un tableau n'a jamais été aussi facile, bien plus que vous ne pouviez vous l'imaginer :</p>
<pre><code class="language-js">let valeursUniques = [...new Set([1, 2, 3, 3])]
&gt;&gt; [1, 2, 3]</code></pre>
<p>Mais quelle facilité déconcertante 😎 ! Tout cela grâce à l'objet <code>Set</code> (ensemble en français) permettant de stocker des valeurs uniques de n'importe quel type, que ce soit des valeurs d'un type primitif ou des objets.</p>
<h2>Tableau et Boolean</h2>
<p>Besoin de filtrer un tableau pour ne garder que des valeurs non <code>null</code> ou similaire (<code>0</code>,  <code>undefined</code>,  <code>null</code>,  <code>false</code>, etc.) ?</p>
<pre><code class="language-js">monTableau
    .map(item =&gt; {
        // ...
    })
    // Chasser les valeurs nulles
    .filter(Boolean);</code></pre>
<p>En passant comme paramètre <code>Boolean</code> et voilà que l'on n'a plus à faire aux valeurs nulles.</p>
<h2>Créer des objets véritablement vide (empty)</h2>
<p>C'est vrai, on peut le faire simplement avec <code>{}</code>, mais il y a un soucis, l'objet aura toujours un <code>__proto__</code> et la fonction habituelle <code>hasOwnProperty</code> ainsi que tant d'autres. Cependant, une méthode existe, et vous permet de créer des objets vides, des pures objets dictionnaires.</p>
<pre><code class="language-js">let dict = Object.create(null);

// dict.__proto__ === "undefined"
// Aucune propriété n'existe tant qu'on ne l'a pas ajouté vonlontairement</code></pre>
<p>Il n'y a absolument rien d'existant dans cet objet jusqu'à ce que l'on pense en ajouter !</p>
<h2>Fusionner des objets</h2>
<p>Le besoin de fusionner plusieurs objets en JavaScript existe depuis des lustres, surtout lorsqu'est arrivé la création des classes et widgets avec options. Voici donc comment cela est possible, aussi simplement que possible :</p>
<pre><code class="language-js">const agent = { nom: 'Jane Doe', sexe: 'Feminin' };
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
*/</code></pre>
<p>Les trois points nous facilitent grandement la tâche.</p>
<h2>Exiger un paramètre à une fonction</h2>
<p>La possibilité d'ajouter des valeurs par défaut a été un ajout de qualité à notre beau JavaScript, mais cette astuce vous permettra d'exiger un argument à une fonction :</p>
<pre><code class="language-js">const requis = () =&gt; { throw new Error('paramètre requis'); };

const bonjour = (nom = requis()) =&gt; { console.log(`Bonjour ${nom}`) };

// Une erreur sera générée si le paramètre _nom_ n'est pas passé à la fonction
bonjour();

// Ceci générera aussi une erreur
bonjour(undefined);

// Ceux-ci, non !
bonjour(null);
bonjour('Janet');</code></pre>
<p>Ce sont des validation d'un niveau supérieur 😅 !</p>
<h2>Alias après déstructuration</h2>
<p>La <a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Op%C3%A9rateurs/Affecter_par_d%C3%A9composition">déstructuration</a> a été bienvenue dans le JavaScript mais, des fois on préfère faire référence aux propriétés en utilisant des noms différents. Voici comment profiter de l'avantage apporté par les alias :</p>
<pre><code class="language-js">const obj = { x: 1 };

// Donner obj.x à { x }
const { x } = obj;

// Donner obj.x à { nomDifferent }
const { x: nomDifferent } = obj;</code></pre>
<p>Important pour éviter les conflits de nommage avec les variables déjà existantes.</p>
<p>Le JavaScript a beaucoup évolué au fil des années, mais ce qui fait de lui un langage du futur, prêt à conquerir le monde, c'est surtout les améliorations et nouveautés qui y sont ajoutées. Malgrè son évolution hyper dynamique, nous avons quand même besoin de connaître certaines astuces pour les utiliser au moment opportun.</p>
<p>Cet article vous a-t-il été utile ? Voulez-vous que j'écrive un autre concenant un sujet qui vous préoccupe particulièrement ? Alors, écrivez-moi un message sur ma page de <a href="/contact">contact</a>.</p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>