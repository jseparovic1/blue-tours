<div class="flex px-2 my-2 border-r-4 border-transparent hover:border-brand transition">
    <img src="{{ $post->getCoverImage() }}" class="h-16 w-auto mr-4"/>
    <div class="flex-1">
        <a class="link-reset font-bold block text-black" href="{{ route('posts.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
        <span class="text-grey">{{ $post->updated_at->format('M d, Y') }}</span>
    </div>
</div>
