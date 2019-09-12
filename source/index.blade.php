@extends('_layouts.master')

@push('googleads')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@endpush

@section('body')
    

    <ins class="adsbygoogle mt-6"
        style="display:block"
        data-ad-client="ca-pub-9554638137229612"
        data-ad-slot="9573950571"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}">
                    <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} image à la une" class="mb-6">
                </a>
            @endif

            <p class="text-grey-darker font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-black font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Lire
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    <hr class="border-b my-6 mb-10">

    <ins class="adsbygoogle mb-6"
        style="display:block"
        data-ad-client="ca-pub-9554638137229612"
        data-ad-slot="9573950571"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    {{-- @include('_components.newsletter-signup') --}}

    <hr class="border-b my-6 mb-10">

    @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-index-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach

    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-9554638137229612"
        data-ad-slot="9573950571"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
@stop
