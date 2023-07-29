<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management</title>
</head>
<body>
    <x-flash-message />
    <nav>
        <a href="/contacts/create">Add Contact</a>
        <p>Menu de navegacao</p>
    </nav>
    <main>
        {{$slot}}
    </main>
    <footer>
        <h2>Footer</h2>
    </footer>
</body>
</html>