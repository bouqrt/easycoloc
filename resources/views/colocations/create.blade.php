<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer une colocation
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('colocations.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block">Nom de la colocation</label>
                        <input type="text" name="name" class="w-full border rounded px-3 py-2">
                    </div>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        Créer
                    </button>

                </form>

            </div>
        </div>
    </div>

</x-app-layout>