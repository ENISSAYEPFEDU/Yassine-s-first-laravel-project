<x-layout>
    <h2> {{ $fruit->name }} </h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>The Price of the fruit is :</strong> {{ $fruit->price }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $fruit->bio }}</p>
    </div>

    {{-- Catégorie info --}}
    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Catégorie Information</h3>
        <p><strong>Catégorie name:</strong> {{ $fruit->catégorie->name }}</p>
        <p><strong>Location:</strong> {{ $fruit->catégorie->location }}</p>
        <p><strong>About the Catégorie:</strong></p>
        <p>{{ $fruit->catégorie->description }}</p>
    </div>
</x-layout>
