<x-layout>
    <form action="{{ route('Fruits.store') }}" method="POST">

        @csrf

        <h2>Create a New Fruit</h2>

        <!-- Fruit Name -->
        <label for="name">Fruit Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <!-- Fruit Price -->
        <label for="price">Fruit Price (0-50000 IDR):</label>
        <input type="number" id="price" name="price" value="{{ old('price') }}" required>

        <!-- Fruit Description -->
        <label for="bio">Description:</label>
        <textarea rows="5" id="bio" name="bio" value="{{ old('bio') }}" required>{{ old('bio') }}</textarea>

        <!-- select a catégorie -->
        <label for="catégorie_id">Catégorie:</label>
        <select id="catégorie_id" name="catégorie_id" required>
            <option value="" disabled selected>Select a catégorie</option>
            @foreach ($Catégories as $catégorie)
                <option value="{{ $catégorie->id }}" {{ $catégorie->id == old('catégorie') ? 'selected' : '' }}>
                    {{ $catégorie->name }}
                </option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Fruit</button>

        <!-- validation des erreurs -->

        @if ($errors->any())
            <ul class="px-4 py-2 bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </form>

</x-layout>
