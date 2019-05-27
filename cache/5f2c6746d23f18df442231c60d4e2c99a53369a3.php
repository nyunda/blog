<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="About <?php echo e($page->siteName); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="Un peu de détail sur <?php echo e($page->siteName); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
<div class="md:w-4/5 mb-20">
	<h1 class="heading">A propos de moi</h1>

    <img src="/assets/img/about.png" alt="Image à propos de moi" class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

    <p class="mb-6">On m'appelle Daniel Rubango et je suis un développeur web, résidant à Kinshasa, travaillant chez <a href="https:\\www.schoolap.com">Schoolap sarl</a> à temps partiel et en freelance depuis chez moi.</p>

    <p class="mb-6">J'utilise principalement comme langage de programmation PHP et le framework Laravel, ainsi JavaScript avec React et VueJs comme framework de prédilection.</p>

    <p class="mb-6">Passionné des nouvelles technologies, j’aime apprendre et développer me compétences tout en dépensant mon temps à me mettre à jour avec les dernières informations technologiques ou réfléchissant et développant des projets persos pouvant apporter des solutions réelles aux gens.</p>

    <p class="mb-6">J’apprécie être impliquer dans différentes étapes des projets concernant le numérique, partant de la réflexion de l’idée, passant par l’analyse et la conception jusqu'au développement et la maintenance. Je suis donc apte à intégrer une équipe quelle que soit le niveau de réalisation du projet ou de prendre un projet, de la conception à la réalisation.</p>

    <p class="mb-6">J’adore partager mes connaissances, mes découvertes et ma petite expérience, cherchant à inspirer, encourager autant que je peux la communauté de dev, d’où la création de ce blog qui me permettra de partager ce que je découvre.</p>

    <p class="mb-6">En dehors de mon travail et du code, je suis prédicateur à plein temps chez les témoins de Jéhovah et j’aime aider mon prochain à découvrir des vérités pouvant lui donner accès à une paix véritable, ce que je fais en partageant la bonne parole.</p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Daniel\workspace\Projects\nyunda/source\about.blade.php ENDPATH**/ ?>