<?php

// @var $container \Illuminate\Container\Container
// @var $events \TightenCo\Jigsaw\Events\EventBus

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

// $events->beforeBuild(function () {
// 	setlocale(LC_TIME, "fr_FR","French");
// });

$events->afterBuild(App\Listeners\GenerateSitemap::class);
$events->afterBuild(App\Listeners\GenerateIndex::class);
