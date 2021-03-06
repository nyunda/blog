---
pagination:
    collection: posts
    perPage: 6
---
@extends('_layouts.master')

@push('googleads')
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9554638137229612",
            enable_page_level_ads: true
        });
    </script>
@endpush

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Blog" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Les derniers articles du Blog {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="mb-6">
        <h1 class="heading">Articles</h1>

        <div class="md:w-4/5 mb-2 mt-6">
            @if ($categories)
                @foreach ($categories as $category)
                    <a
                        href="{{ '/blog/categories/' . $category->slug }}"
                        title="Articles concernant {{ $category->slug }}"
                        class="mb-2 inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-blue-600 hover:text-blue-800 uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                    >{{ $category->title }}</a>
                @endforeach
            @endif
        </div>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-format="fluid"
            data-ad-layout-key="-5f+cn+50-cx-11"
            data-ad-client="ca-pub-9554638137229612"
            data-ad-slot="2336739750"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

        <hr class="border-b my-8">
    </div>

    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-format="fluid"
        data-ad-layout-key="-5f+cn+50-cx-11"
        data-ad-client="ca-pub-9554638137229612"
        data-ad-slot="2336739750"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Page précédente"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Aller à la page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 text-blue-800 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-dark' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Page suivante"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
