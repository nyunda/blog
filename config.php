<?php

return [
    'baseUrl' => 'https//nyunda.dev',
    'production' => false,
    'siteName' => 'NYUNDA.DEV',
    'siteDescription' => 'Apprendre et découvrir le monde du developpement et du numérique en général autant que l\'on peut',
    'siteAuthor' => 'Daniel Rubango',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Daniel Rubango', // Default author, if not provided in a post
            'sort' => '-date',
            'readTime' => function($page) {
                return intval(round(str_word_count(strip_tags($page->getContent())) / 200));
            },
            'path' => 'blog/{filename}',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        setlocale(LC_TIME, "fr_FR","French");

        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        $content = $page->excerpt ?? $page->getContent();
        $cleaned = strip_tags(
            preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content),
            '<code>'
        );

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return ends_with(trimPath($page->getPath()), trimPath($path));
    },
];
