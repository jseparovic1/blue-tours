<section class="bg-white md:bg-transparent">
    <div class="max-w-3xl mx-auto">
        <div class="flex flex-col items-center space-between">
            <h1 class="heading-title text-center">{{ config('settings.main_blog.title') }}</h1>
            <p class="heading-description">{{ config('settings.main_blog.description') }}</p>
            <div class="featured flex flex-row flex-wrap md:flex-no-wrap -mx-4 self-stretch mb-4">
                @foreach($posts as $post)
                    <a class="tour w-full mx-4 flex flex-col md:shadow mb-4 md:mb-0 rounded-lg overflow-hidden group img-zoom-wrapper"
                       href="{{ route('posts.show', ['post' => $post->slug]) }}">
                        <img class="h-auto w-full bg-cover img-zoom"
                             alt="{{ $post->title . ' image' }}"
                             src="{{ $post->getFirstMediaUrl(\App\Post::COVER_COLLECTION) }}"
                        />
                        <div class="flex flex-col h-full justify-around p-5 hover:text-brand rounded-b-lg">
                            <h1 class="text-lg font-semibold text-black mb-2">{{ $post->title }}</h1>
                            <p class="text-grey-darkest">{{ $post->description }}</p>
                            <div class="text-grey text-sm pt-5 group-hover:text-brand">
                                READ MORE
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
