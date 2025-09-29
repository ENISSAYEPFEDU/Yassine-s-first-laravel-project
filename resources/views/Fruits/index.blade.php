<x-layout>
    <h1>Currently available fruits </h1>



    <ul>
        @foreach ($Fruits as $Fruit)
            <li>
                <x-card href="{{ route('Fruits.show', $Fruit->id) }}" :highlight="$Fruit->price > 16000">
                    <div>
                        <h3>{{ $Fruit->name }}</h3>
                        <p>{{ $Fruit->Catégorie->name }}</p>
                    </div>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $Fruits->links() }}
</x-layout>
