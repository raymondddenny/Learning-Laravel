<x-layout>
    <x-slot:heading>Jobs Listings</x-slot>
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{$job['title']}}</strong> : Pays {{$job['salary']}}
                </a>
            </li>
        @endforeach
    </ul>

</x-layout>
