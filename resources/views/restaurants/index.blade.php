<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="width: 50%">
                {{ __('Restaurants') }}
            </h2>
            <div class="flex justify-end" style="width: 50%">
                <a class="btn btn-success" href="{{ route('restaurants.create') }}"
                    style="background-color:blue; color: white; padding: 5px; border-radius: 5px"> Add new
                    Restaurant</a>
            </div>
        </div>
    </x-slot>
    @foreach ($restaurants as $restaurant)
    <div class="flex justify-center max-w-7xl mx-auto lg:px-10 my-20" style="margin-top: 20px; width: 700px;">
        <div class="flex md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <div class="p-6 justify-start float-left">
                <div class="flex">
                    <h5 class="text-gray-900 text-xl font-medium mb-2" style="width: 90%">{{ $restaurant->name }}</h5>
                    <div style="width:10%; justify-content: right">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('restaurants.edit', $restaurant)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('restaurants.destroy', $restaurant) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('restaurants.destroy', $restaurant)"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
                <p class="text-gray-700 text-base mb-4" style="width: 60%">
                    {{ $restaurant->description }}
                </p>
                @if($restaurant->change)
                    <p>Rückgeld beim Einlösen einer Marke erhältlich</p>
                @else
                    <p>Rückgeld beim Einlösen einer Marke nicht erhältlich</p>
                @endif
                <p>Max. einlösbare Essensmarken: {{$restaurant->redeemable_food_vouchers}}
            </div>
        </div>
    </div>
    @endforeach
    </div>
</x-app-layout>