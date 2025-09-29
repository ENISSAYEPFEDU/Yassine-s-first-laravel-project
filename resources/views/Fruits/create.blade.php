<x-layout>
    <form action="" method="">

        @csrf

        <h2>Create a New Fruit</h2>

        <!-- Fruit Name -->
        <label for="name">Fruit Name:</label>
        <input type="text" id="name" name="name" required>

        <!-- Fruit Price -->
        <label for="price">Fruit Price (0-50000):</label>
        <input type="number" id="price" name="price" required>

        <!-- Fruit Description -->
        <label for="bio">Description:</label>
        <textarea rows="5" id="bio" name="bio" required></textarea>

        <!-- select a catégorie -->
        <label for="catégorie_id">Catégorie:</label>
        <select id="catégorie_id" name="catégorie_id" required>
            <option value="" disabled selected>Select a catégorie</option>
            @foreach ($Catégories as $catégorie)
                <option value="{{ $catégorie->id }}">{{ $catégorie->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn mt-4">Create Fruit</button>

        <!-- validation des erreurs -->
    </form>

</x-layout>
