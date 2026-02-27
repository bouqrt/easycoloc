<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des dépenses
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <table class="min-w-full border">
                    <thead>
                        <tr>
                            <th class="border px-4 py-2">Titre</th>
                            <th class="border px-4 py-2">Montant</th>
                            <th class="border px-4 py-2">Utilisateur</th>
                            <th class="border px-4 py-2">Catégorie</th>
                            <th class="border px-4 py-2">Colocation</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($expenses as $expense)
                        <tr>
                            <td class="border px-4 py-2">{{ $expense->title }}</td>
                            <td class="border px-4 py-2">{{ $expense->amount }} DH</td>
                            <td class="border px-4 py-2">{{ $expense->user->name }}</td>
                            <td class="border px-4 py-2">{{ $expense->category->name }}</td>
                            <td class="border px-4 py-2">{{ $expense->colocation->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>