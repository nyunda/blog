@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<h1 class="heading">Me contacter</h1>

<div class="md:w-4/5 md:m-auto">
    <p class="mb-8">
        Pour vos questions, vos avis ou toute autre chose qui vous passe par la tête, je suis prêt et impatient de vous lire, profiter de votre compagnie et partager ma petite expérience.
    </p>

    <form action="/contact" class="mt-20">
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                <label class="block mb-2 text-grey-darkest text-sm font-semibold" for="contact-name">
                    Nom complet
                </label>

                <input
                    type="text"
                    id="contact-name"
                    placeholder="John Doe"
                    name="name"
                    class="block w-full border shadow rounded-lg outline-none mb-2 p-4"
                    required
                >
            </div>

            <div class="w-full px-3 md:w-1/2">
                <label class="block text-grey-darkest text-sm font-semibold mb-2" for="contact-email">
                    Adresse Email
                </label>

                <input
                    type="email"
                    id="contact-email"
                    placeholder="email@domain.com"
                    name="email"
                    class="block w-full border shadow rounded-lg outline-none mb-2 p-4"
                    required
                >
            </div>
        </div>

        <div class="w-full mb-12">
            <label class="block text-grey-darkest text-sm font-semibold mb-2" for="contact-message">
                Message
            </label>

            <textarea
                id="contact-message"
                rows="4"
                name="message"
                class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-6"
                placeholder="Ici votre chaleureux message."
                required
            ></textarea>
        </div>

        <div class="flex justify-end w-full">
            <input
                type="submit"
                value="Envoyer"
                class="block bg-blue hover:bg-blue-dark text-white text-sm font-semibold tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
            >
        </div>
    </form>
</div>
@stop
