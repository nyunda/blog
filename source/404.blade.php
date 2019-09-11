@extends('_layouts.master')

@push('googleads')
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-9554638137229612",
            enable_page_level_ads: true
        });
    </script>
@endpush

@section('body')
    <div class="flex flex-col items-center text-grey-darker mt-32">
        <h1 class="heading text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page introuvable.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            Perdu ? Vous pouvez retourner à la page d'acceuil <a title="NYUNDA.DEV" href="https://nyunda.dev">nyunda.dev</a>.
        </p>
    </div>
@endsection
