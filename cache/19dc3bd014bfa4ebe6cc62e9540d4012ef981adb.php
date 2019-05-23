<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="<?php echo e($page->siteName); ?> Blog" href="/blog"
        class="ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/blog') ? 'active text-blue-dark' : ''); ?>">
        Articles
    </a>

    <a title="<?php echo e($page->siteName); ?> About" href="/about"
        class="ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/about') ? 'active text-blue-dark' : ''); ?>">
        A propos
    </a>

    <a title="<?php echo e($page->siteName); ?> Contact" href="/contact"
        class="ml-6 text-grey-darker hover:text-blue-dark <?php echo e($page->isActive('/contact') ? 'active text-blue-dark' : ''); ?>">
        Contact
    </a>
</nav>
<?php /**PATH C:\Users\Daniel\workspace\Projects\nyunda\source/_nav/menu.blade.php ENDPATH**/ ?>