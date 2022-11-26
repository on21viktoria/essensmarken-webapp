<x-app-layout>
    <x-slot name="header">
    <div class="flex">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="width:50%">
                {{ __('Editing Restaurant') }}
            </h2>
            <div class="flex justify-end" style="width: 50%">
                <a class="btn btn-success" href="{{ route('restaurants.index') }}" style="background-color:blue; color: white; padding: 5px; border-radius: 5px"> Back</a>
            </div>
        </div>
    </x-slot>
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
    @endif
    <div class="flex justify-center max-w-7xl mx-auto lg:px-10" style="margin-top: 20px">
        <div class="block p-6 rounded-lg shadow-lg bg-white" style="min-width: 500px">
            <form action="{{ route('restaurants.update',$restaurant->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="mb-4">
                        <div class="form-group">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                            <input type="text" name="name"
                                class="shadow appearance-none border rounded w-full py-2 p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Name" value="{{ $restaurant->name }}">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-group">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea name="description"
                                class="shadow appearance-none border rounded w-full py-2 p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Description">{{ $restaurant->description }}</textarea>
                            @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-group">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Website</label>
                            <input type="url" name="link"
                                class="shadow appearance-none border rounded w-full py-2 p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Website" value="{{ $restaurant->link }}">
                            @error('link')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-group">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Max redeemable vouchers</label>
                            <input type="number" name="redeemable_food_vouchers"
                                class="shadow appearance-none border rounded w-full py-2 p-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                value="{{ $restaurant->redeemable_food_vouchers }}">
                            @error('redeemable_food_vouchers')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="form-group">
                            <input type="hidden" name="change" value="0">
                            @if($restaurant->change)
                            <input type="checkbox" name="change" value="1"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                checked>
                            @else
                            <input type="checkbox" name="change" value="1"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                            @endif
                            <label class="text-gray-700 text-sm font-bold mb-2">Change</label>
                            @error('change')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4 flex flex-col items-start">
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                            style="background-color: blue">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>