<div class="flex flex-col -mb-4 w-full md:mx-auto">
@if ($post->cover_image)
    <div class="flex flex-wrap md:flex-no-wrap mb-4">
        <div class="w-full md:w-1/3 md:mr-5">
            <a
                href="{{ $post->getUrl() }}"
                title="Lire d'avantage - {{ $post->title }}"
                class="text-black font-extrabold"
                >
                <img
                src="{{ $post->cover_image }}"
                alt="{{ $post->title }} image de couverture" class="mb-2 w-full"
                >
            </a>
        </div>

        <div class="w-full md:w-2/3">
            <div class="w-2/3">
                @if ($post->categories)
                    @foreach ($post->categories as $i => $category)
                        <a
                            href="{{ '/blog/categories/' . $category }}"
                            title="Articles concernant {{ $category }}"
                            class="mb-2 inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-blue-600 hover:text-blue-800 uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                        >{{ $category }}</a>
                    @endforeach
                @endif
            </div>

            <h2 class="text-3xl mt-0 mb-0">
                <a
                    href="{{ $post->getUrl() }}"
                    title="Lire d'avantage - {{ $post->title }}"
                    class="text-black font-extrabold"
                >{{ $post->title }}</a>
            </h2>

            <p class="text-gray-600 font-medium my-2">
                {{ $post->getDate()->format('F j, Y') }}
            </p>

            <p class="mb-4 mt-0">{!! $post->getExcerpt(100) !!}</p>

            <a
                href="{{ $post->getUrl() }}"
                title="Lire d'avantage - {{ $post->title }}"
                class="uppercase font-semibold tracking-wide mb-2"
            >lire</a>
        </div>
    </div>

    @else

    <div class="flex mb-4">
        <div class="w-full">
            <div class="w-2/3">
                @if ($post->categories)
                    @foreach ($post->categories as $i => $category)
                        <a
                            href="{{ '/blog/categories/' . $category }}"
                            title="Articles concernant {{ $category }}"
                            class="mb-2 inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-blue-800 hover:text-blue-800 uppercase text-xs font-semibold rounded mr-4 px-3 py-1 pt-py"
                        >{{ $category }}</a>
                    @endforeach
                @endif
            </div>

            <h2 class="text-3xl mt-0 mb-0">
                <a
                    href="{{ $post->getUrl() }}"
                    title="Lire d'avantage - {{ $post->title }}"
                    class="text-black font-extrabold"
                >{{ $post->title }}</a>
            </h2>

            <p class="text-gray-600 font-medium my-2">
                {{ $post->getDate()->format('F j, Y') }}
            </p>

            <p class="mb-4 mt-0">{!! $post->getExcerpt(100) !!}</p>

            <a
                href="{{ $post->getUrl() }}"
                title="Lire d'avantage - {{ $post->title }}"
                class="uppercase font-semibold tracking-wide mb-2"
            >lire</a>
        </div>
    </div>
@endif
</div>
