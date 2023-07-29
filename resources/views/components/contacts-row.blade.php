@props(['contact'])

<h2>
    <a href="/contacts/{{ $contact['id'] }}">{{ $contact['name'] }}</a>
</h2>
<p>
    {{ $contact['email'] }}
</p>