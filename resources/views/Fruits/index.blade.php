<x-layout>
    <h1>Currently available fruits </h1>
    <p>{{ $greetings }}</p>



    <ul>
        @foreach ($Fruits as $Fruit)
            <li>
                <p>{{ $Fruit['name'] }} </p>
                <a href="/Fruits/{{ $Fruit['id'] }}">View details</a>
            </li>
        @endforeach
    </ul>
</x-layout>
