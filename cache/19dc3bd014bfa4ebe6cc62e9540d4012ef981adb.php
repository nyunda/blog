<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="<?php echo e($page->siteName); ?> Blog" href="/blog"
        class="ml-6 text-gray-800 hover:text-blue-600 <?php echo e($page->isActive('/blog') ? 'active text-blue-600' : ''); ?>">
        Articles
    </a>

    <a title="<?php echo e($page->siteName); ?> About" href="/about"
        class="ml-6 text-gray-800 hover:text-blue-600 <?php echo e($page->isActive('/about') ? 'active text-blue-600' : ''); ?>">
        A propos
    </a>

    <a title="<?php echo e($page->siteName); ?> Contact" href="/contact"
        class="ml-6 text-gray-800 hover:text-blue-600 <?php echo e($page->isActive('/contact') ? 'active text-blue-600' : ''); ?>">
        Contact
    </a>
</nav>
<?php /**PATH C:\Users\Daniel\workspace\Projects\nyunda\source/_nav/menu.blade.php ENDPATH**/ ?>