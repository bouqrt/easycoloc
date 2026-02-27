<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter une dépense
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form method="POST" action="{{ route('expenses.store') }}">
                    @csrf

                    <div class="mb-4">
                        <label class="block">Titre</label>
                        <input type="text" name="title" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block">Montant</label>
                        <input type="number" name="amount" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block">Date</label>
                        <input type="date" name="date" class="w-full border rounded px-3 py-2">
                    </div>

                    <div class="mb-4">
                        <label class="block">Utilisateur</label>
                        <select name="user_id" class="w-full border rounded px-3 py-2">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block">Catégorie</label>
                        <select name="category_id" class="w-full border rounded px-3 py-2">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block">Colocation</label>
                        <select name="colocation_id" class="w-full border rounded px-3 py-2">
                            @foreach($colocations as $colocation)
                                <option value="{{ $colocation->id }}">{{ $colocation->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button class="bg-blue-500 text-white px-4 py-2 rounded">
                        Ajouter
                    </button>

                </form>

            </div>
        </div>
    </div>

</x-app-layout>