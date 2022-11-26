<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semi-bold text-xl mt-0 mb-6">Willkommen zur Essensmarken-App</h2>
                    <p>Diese Applikation gibt euch eine Übersicht über die Essensmarken,
                        die man als dualer Student in Mosbach erwerben kann. </p>
                    <p>Die Essensmarken könnt ihr euch während den Öffnungszeiten in der Bibliothek holen.</p>
                    <p class="mb-6">Diese Essensmarken kann man in ausgewählte Restaurants
                        für den untengenannten Wert einlösen. Eine Liste aller Restaurants findet ihr in dem Reiter
                        "Restaurants".</p>
                    <p class="mb-6 font-semibold">Preis: 2,70€</p>
                    <p class="mb-6 font-semibold">Wert: 5,40€
                    <p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>