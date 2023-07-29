<x-layout>
    @include('partials._banner')
    @include('partials._search')

    @unless (count($contacts) == 0)
        @foreach ($contacts as $contact)
            <x-contacts-row :contact="$contact" />
        @endforeach
    @else
        <p>No contacts found</p>
    @endunless

    <div class="mt-6 p-4">
        {{$contacts->links()}}
    </div>
</x-layout>
