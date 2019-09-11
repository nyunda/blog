@extends('_layouts.master')

@push('meta')
    <meta property="og:description" content="{{ $page->description }}" />
    <meta property="og:image" content="{{ $page->social_image ?? $page->cover_image }}" />
@endpush

@push('googleads')
    {{-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> --}}
@endpush

@section('body')
<div class="md:w-2/3 mx-auto">
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-600 text-xl md:mt-0">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="Articles concernant {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-2 px-3"
            >{{ $category }}</a>
        @endforeach
    @endif

    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-9554638137229612"
        data-ad-slot="9573950571"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    <div class="w-full border-b border-blue-200 mt-8 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Article précédent: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Article suivant: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
</div>
@endsection
