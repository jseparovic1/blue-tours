@extends('layouts.page', [
    'title' => 'Tours',
    'breadcrumbUrl' => route('tours.index'),
    'imageUrl' => asset('images/header/omis.jpg'),
])

@section('page')
    <section class="mx-auto">
        <div class="container">
            <p class="text-grey-darker font-semibold">
                Lorem ipsum dolor sit amet consectetur adipiscing elit Etiam at ipsum at ligula vestibulum sodales.
            </p>
        </div>
    </section>

    <section class="container focus:bg-grey-light">
        <div class="px-2">
            <div class="flex flex-wrap -mx-2">
                @foreach($tours as $tour)
                    <a href="{{ route('tours.show', $tour->slug) }}" class="w-full xl:w-1/2 px-2 flex-no-shrink mb-8">
                        <div class="h-full flex flex-col sm:flex-row justify-between hover:shadow mb-10">
                            <div class="w-full flex img-zoom-wrapper">
                                <img class="w-full img-zoom" src="{{ $tour->getFirstMedia('hero')->getUrl('card') }}"/>
                            </div>
                            <div class="w-full lg:w-5/6 flex flex-col justify-around px-5 pb-5">
                                <h1 class="text-xl font-bold text-black mb-2">{{ $tour->title }}</h1>
                                <p class="text-lg mb-4 text-grey-darker">{{ str_limit($tour->card_description, 100, '...') }}</p>
                                <button class="btn btn-primary rounded-b-full">BOOK NOW</button>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection