<?php $__env->startSection('content'); ?><ul>
<li>Date de sortie pas encore confirmée, mais sans doutes aux allentours de Décembre 2019...</li>
<li><a href="#fonctions-flechees">Fonctions fléchées</a> pour des fonctions en une seule ligne</li>
<li><a href="#prechargement">Préchargement</a> pour une amélioration des performances</li>
<li><a href="#typage-de-proprietes">Typage</a> dans les classes</li>
<li>L'<a href="#operateur-d-assiociation">Opérateur d'association en cas de valeur nulle</a> en version courte</li>
<li><a href="#ffi">FFI</a>  ouvre des nouvelles possibilités de création des extensions en PHP</li>
<li><a href="#depreciation-balise-d-ouverture">Dépréciation</a> de l'ouverture de balise PHP courte</li>
<li>Opérateur de décomposition <a href="#operateur-de-decomposition">de tableaux</a></li>
<li>Et bien plus encore</li>
</ul>
<h2 id="fonctions-flechees">Fonctions fléchées <a href="https://wiki.php.net/rfc/arrow_functions_v2">RFC</a></h2>
<p>Les fonctions fléchées, que j'apprécie tant depuis que c'est apparu dans le JavaScript, permet de declarer des fonctions en une seule ligne.</p>
<pre><code class="language-php">array_map(function (User $user) {
    return $user-&gt;id;
}, $users)</code></pre>
<pre><code class="language-php">array_map(fn(User $user) =&gt; $user-&gt;id, $users)</code></pre>
<p>Tout comme dans le JavaScript, les fonctions fléchées ont quelques particularités:</p>
<ul>
<li>Les variables de l'environnement parent y sont accessible, pas besoin d'utiliser le mot clé <code>use</code>.</li>
<li><code>$this</code>  is available just like normal closures.</li>
<li>Les fonctions fléchées ne peuvent contenir qu'une seule et unique ligne, qui représente aussi le retour de fonction.</li>
</ul>
<p>Un article beaucoup plus détaillé concernant les fonctions fléchées est en préparation.</p>
<h2 id="typage-de-proprietes">Typage de propriétés <a href="https://wiki.php.net/rfc/typed_properties_v2">RFC</a></h2>
<p>Les variables de classes pourront être typées :</p>
<pre><code class="language-php">class A
{
    public string $nom;

    public Foo $bar;
}</code></pre>
<h2 id="operateur-d-assiociation">Opérateur d'association en cas de valeur nulle <a href="https://wiki.php.net/rfc/null_coalesce_equal_operator">RFC</a></h2>
<p>Au lieu de faire ceci :</p>
<pre><code class="language-php">$data['date'] = $data['date'] ?? new DateTime();</code></pre>
<p>Il est possible de faire comme ceci :</p>
<pre><code class="language-php">$data['date'] ??= new DateTime();
</code></pre>
<h2 id="operateur-de-decomposition">Opérateur de décomposition de tableau ou Array Spread Operator en Anglais <a href="https://wiki.php.net/rfc/spread_operator_for_array">RFC</a></h2>
<p>Ce serait possible d'utiliser l'opérateur de décomposition de tableau en PHP :</p>
<pre><code class="language-php">$tableau1= [1, 2, 3];

$tableau2 = [4, 5];

$resultat = [0, ...$tableau1, ...$tableau2, 6 ,7];
// [0, 1, 2, 3, 4, 5, 6, 7]
</code></pre>
<p>Il est à noter que ça ne marche que pour les tableaux aux clés numérique.</p>
<h2 id="ffi">Interface de fonction étrangère ou FFI <a href="https://wiki.php.net/rfc/ffi">RFC</a></h2>
<p>L'interface de fonction étrangère, ou FFI en Anglais, permet d'appeler du code écrit en C côté utilisateur. Cela signifie que les extensions PHP pourront être écrite en pure PHP. On aura quand même besoin de s'y connaitre en C pour profiter pleinement de cette fonctionnalité, c'est donc un sujet complexe.</p>
<h2 id="prechargement">Préchargement <a href="https://wiki.php.net/rfc/preload">RFC</a></h2>
<p>Un ajout très intéressant au PHP, pouvant apporter des une nette amélioration de performances.</p>
<p>Bref: si tu utiliser une framework aujourd'hui, ses fichiers ont besoin d'être chargés et recompilés lors de chaque requête. Le préchargement permettra au serveur de charger des fichiers PHP en mémoire à l'initialisation et les rendre accessible pour les futures requêtes.</p>
<p>Le gain en performance apporte avec lui un coût, pas le moindre: s'il y a des modifications dans les fichiers, le serveur aura besoin d'être redémarré.</p>
<h2>Priorité de concaténation <a href="https://wiki.php.net/rfc/concatenation_precedence">RFC</a></h2>
<p>En codant quelque chose de semblable à ceci:</p>
<pre><code class="language-php">echo "sum: " . $a + $b;</code></pre>
<p>PHP interprété précédemment comme suit:</p>
<pre><code class="language-php">echo ("sum: " . $a) + $b;</code></pre>
<p>PHP 8 interprétera comme suit:</p>
<pre><code class="language-php">echo "sum :" . ($a + $b);</code></pre>
<p>PHP 7.4 avertira lorsqu'il rencontrera un expression non mise en parenthèse et contenant un '.' avant un '+' ou un '-'.</p>
<h2><code>mb_str_split</code> ajouté <a href="https://wiki.php.net/rfc/mb_str_split">RFC</a></h2>
<p>Cette fonction apporte les même fonctionnalités que la fonction  <code>str_split</code>, mais sur des chaines de caractères à plusieurs octets.</p>
<h2 id="depreciation-balise-d-ouverture">Dépréciation de l'utilisation de la courte balise d'ouverture <a href="https://wiki.php.net/rfc/deprecate_php_short_tags">RFC</a></h2>
<p>La balise d'ouverture courte  <code>&lt;?</code>  est à présent dépréciée et sera supprimé dans PHP 8. La courte balise echo  <code>&lt;?=</code>  n'est pas affectée.</p>
<h2>Enfin…</h2>
<p>Si tu es toujours là depuis le début, ce que PHP t’intéresse et son futur encore plus.
Sois-donc à l'affût des prochains articles à ce sujet. Restons en <a href="/contact/">contact</a>.</p><?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.post', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>