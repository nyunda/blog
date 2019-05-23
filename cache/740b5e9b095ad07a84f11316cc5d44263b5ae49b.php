<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="<?php echo e($page->siteName); ?> Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="The list of blog posts for <?php echo e($page->siteName); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>
    <div class="mb-16">
        <h1 class="heading">Articles</h1>

        <div class="md:w-4/5 mb-2 mt-6">
            <?php if($categories): ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a
                        href="<?php echo e('/blog/categories/' . $category->slug); ?>"
                        title="Articles concernant <?php echo e($category->slug); ?>"
                        class="mb-2 inline-block bg-grey-light hover:bg-blue-lighter leading-loose tracking-wide text-blue hover:text-blue uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                    ><?php echo e($category->title); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>

        <hr class="border-b my-8">
        
    </div>

    <?php $__currentLoopData = $pagination->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make('_components.post-preview-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if($post != $pagination->items->last()): ?>
            <hr class="border-b my-6">
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($pagination->pages->count() > 1): ?>
        <nav class="flex text-base my-8">
            <?php if($previous = $pagination->previous): ?>
                <a
                    href="<?php echo e($previous); ?>"
                    title="Page précédente"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            <?php endif; ?>

            <?php $__currentLoopData = $pagination->pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pageNumber => $path): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a
                    href="<?php echo e($path); ?>"
                    title="Aller à la page <?php echo e($pageNumber); ?>"
                    class="bg-grey-lighter hover:bg-grey-light text-blue-darker rounded mr-3 px-5 py-3 <?php echo e($pagination->currentPage == $pageNumber ? 'text-blue-dark' : ''); ?>"
                ><?php echo e($pageNumber); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($next = $pagination->next): ?>
                <a
                    href="<?php echo e($next); ?>"
                    title="Page suivante"
                    class="bg-grey-lighter hover:bg-grey-light rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            <?php endif; ?>
        </nav>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Daniel\workspace\Projects\nyunda/cache\e6cf3c6d966a1ba3b0399efc4bb37d0e82b08fff.blade.php ENDPATH**/ ?>