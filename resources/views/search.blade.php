<!DOCTYPE html>
<html>
<head>
<title>Search User</title>
</head>
<body>

<h1>Cari User</h1>

<form method="GET" action="{{ route('search') }}">
    <input
        type="text"
        name="search"
        placeholder="Cari user..."
    >

    <button type="submit">
        Cari
    </button>
</form>

<hr>

@foreach($users as $user)

<div>
    {{ $user->name }}
</div>

@endforeach

</body>
</html>