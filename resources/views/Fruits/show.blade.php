<x-layout>
    <h2> {{ $fruit->name }} </h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>The Price of the fruit is :</strong> {{ $fruit->price }}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $fruit->bio }}</p>
    </div>
</x-layout>
