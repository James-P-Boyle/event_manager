<x-main-layout>
    <section class="bg-white">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl">All Events</h1>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">

                @foreach($events as $event)
                    <div class="lg:flex">
                        <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="{{ asset('/storage/' . $event->image) }}" alt="{{ $event->title }}">

                        <div class="flex flex-col justify-between lg:mx-6">
                            <a href="{{ route('eventShow', $event->id)}}" class="text-xl font-semibold text-gray-800 hover:underline ">
                                {{ $event->title }}
                            </a>

                            <span class="p-2 text-sm text-white bg-indigo-400 rounded-md dark:text-gray-300">
                                {{ $event->country->name }}
                            </span>
                            <span class="flex flex-wrap space-x-2">
                                @foreach ($event->tags as $tag)
                                    <p class="p-1 text-sm rounded-md bg-slate-200">{{ $tag->name }}</p>
                                @endforeach
                            </span>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</x-main-layout>
