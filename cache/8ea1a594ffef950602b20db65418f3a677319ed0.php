<div class="flex flex-col mb-10 w-full md:mx-auto">
<?php if($post->cover_image): ?>
    <div class="flex flex-wrap md:flex-no-wrap mb-4">
        <div class="w-full md:w-1/3 md:mr-5">
            <a
                href="<?php echo e($post->getUrl()); ?>"
                title="Lire d'avantage - <?php echo e($post->title); ?>"
                class="text-black font-extrabold"
                >
                <img
                src="<?php echo e($post->cover_image); ?>"
                alt="<?php echo e($post->title); ?> image de couverture" class="mb-2 w-full"
                >
            </a>
        </div>

        <div class="w-full md:w-2/3">
            <div class="w-2/3">
                <?php if($post->categories): ?>
                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a
                            href="<?php echo e('/blog/categories/' . $category); ?>"
                            title="Articles concernant <?php echo e($category); ?>"
                            class="mb-2 inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-blue-600 hover:text-blue-800 uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                        ><?php echo e($category); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <h2 class="text-3xl mt-0 mb-0">
                <a
                    href="<?php echo e($post->getUrl()); ?>"
                    title="Lire d'avantage - <?php echo e($post->title); ?>"
                    class="text-black font-extrabold"
                ><?php echo e($post->title); ?></a>
            </h2>

            <p class="text-gray-600 font-medium my-2">
                <?php echo e($post->getDate()->format('F j, Y')); ?>

            </p>

            <p class="mb-4 mt-0"><?php echo $post->getExcerpt(100); ?></p>

            <a
                href="<?php echo e($post->getUrl()); ?>"
                title="Lire d'avantage - <?php echo e($post->title); ?>"
                class="uppercase font-semibold tracking-wide mb-2"
            >lire</a>
        </div>
    </div>

    <?php else: ?>

    <div class="flex mb-4">
        <div class="w-full">
            <div class="w-2/3">
                <?php if($post->categories): ?>
                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a
                            href="<?php echo e('/blog/categories/' . $category); ?>"
                            title="Articles concernant <?php echo e($category); ?>"
                            class="mb-2 inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-blue-800 hover:text-blue-800 uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                        ><?php echo e($category); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <h2 class="text-3xl mt-0 mb-0">
                <a
                    href="<?php echo e($post->getUrl()); ?>"
                    title="Lire d'avantage - <?php echo e($post->title); ?>"
                    class="text-black font-extrabold"
                ><?php echo e($post->title); ?></a>
            </h2>

            <p class="text-gray-600 font-medium my-2">
                <?php echo e($post->getDate()->format('F j, Y')); ?>

            </p>

            <p class="mb-4 mt-0"><?php echo $post->getExcerpt(100); ?></p>

            <a
                href="<?php echo e($post->getUrl()); ?>"
                title="Lire d'avantage - <?php echo e($post->title); ?>"
                class="uppercase font-semibold tracking-wide mb-2"
            >lire</a>
        </div>
    </div>
<?php endif; ?>
</div>
<?php /**PATH C:\Users\Daniel\workspace\Projects\nyunda\source/_components/post-preview-inline.blade.php ENDPATH**/ ?>