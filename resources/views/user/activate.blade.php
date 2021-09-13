<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Activate Registration Code') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('dashboard.user-activate-code-and-register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input class="w-full h-10 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="vn" placeholder="V/N number"/>
                        <input class="w-full h-10 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="car-brand" placeholder="Car brand"/>
                        <input class="w-full h-10 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="car-model" placeholder="Car model"/>
                        <input class="w-full h-10 px-3 mb-2 text-base text-gray-700 placeholder-gray-600 border rounded-lg focus:shadow-outline" type="text" name="code" placeholder="Activation code"/>
                        <div class="mt-3 text-center pb-3"> <button type="submit" class="w-full h-12 text-lg w-32 bg-blue-600 rounded text-white hover:bg-blue-700">Register car</button> </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
