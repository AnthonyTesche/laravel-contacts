<x-layout>
    <form method="POST" action="/contacts">
        @csrf
        <input type="name" name="name" value="{{old('name')}}">
        @error('name')
            <p>{{$message}}</p>
        @enderror
        <input type="contact" name="contact" value="{{old('contact')}}">
        @error('contact')
            <p>{{$message}}</p>
        @enderror
        <input type="email" name="email" value="{{old('email')}}">
        @error('email')
            <p>{{$message}}</p>
        @enderror
        <button type="submit">Add Contact</button>
    </form>
</x-layout>
