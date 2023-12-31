<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Edit Gallery') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <form
                method="POST"
                action="{{ route('galleries.update', $gallery->id) }}"
                enctype="multipart/form-data"
                class="flex flex-col gap-4 p-4 bg-white rounded-md dark:bg-slate-800"
            >
                @csrf
                @method('PUT')

                <div>
                    <label
                        for="caption"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                    >
                        Caption
                    </label>
                    <input
                        type="text"
                        id="caption"
                        name="caption"
                        value="{{ old('caption', $gallery->caption) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    >
                    @error('caption')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <img
                        src="{{ asset('storage/' . $gallery->image) }}"
                        alt=""
                        class="w-20 h-20"
                    >
                    <input
                        id="file_input"
                        type="file"
                        name="image"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    >
                    @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                >
                    Update
                </button>
            </div>
        </form>
    </div>

</x-app-layout>
