<x-app-layout>
    <div class="flex space-x-2 justify-center">
        <a class="btn btn-success" href="{{ route('restaurants.create') }}"> Add new Company</a>
    </div>
    @foreach ($restaurants as $restaurant)
    <div class="flex justify-center">
        <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <div class="p-6 flex flex-col justify-start">
                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $restaurant->name }}</h5>
                <p class="text-gray-700 text-base mb-4">
                    {{ $restaurant->description }}
                </p>
                <x-dropdown>
                    <x-slot name="trigger">
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                            </svg>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('restaurants.edit', $restaurant)">
                            {{ __('Edit') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
    @endforeach
    </div>
</x-app-layout>