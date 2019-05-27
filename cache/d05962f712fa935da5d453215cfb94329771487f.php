<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="list-reset my-0">
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Blog"
                href="/blog"
                class="nav-menu__item hover:text-blue-900 <?php echo e($page->isActive('/blog') ? 'active text-blue-900' : ''); ?>"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> About"
                href="/about"
                class="nav-menu__item hover:text-blue-900 <?php echo e($page->isActive('/about') ? 'active text-blue-900' : ''); ?>"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="<?php echo e($page->siteName); ?> Contact"
                href="/contact"
                class="nav-menu__item hover:text-blue-900 <?php echo e($page->isActive('/contact') ? 'active text-b-900lue' : ''); ?>"
            >Contact</a>
        </li>
    </ul>
</nav>
<?php /**PATH C:\Users\Daniel\workspace\Projects\nyunda\source/_nav/menu-responsive.blade.php ENDPATH**/ ?>