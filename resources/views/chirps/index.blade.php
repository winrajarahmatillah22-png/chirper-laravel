<!DOCTYPE html>
<html>
<head>
    <title>Chirps</title>
</head>
<body>

<h1>Chirps</h1>

<form method="POST" action="{{ route('chirps.store') }}">
    @csrf
    <textarea name="message" placeholder="Apa yang kamu pikirkan?" required></textarea>
    <br>
    <button type="submit">Post</button>
</form>

<hr>

<h3>Postingan:</h3>

@foreach($chirps as $chirp)
    <p>
        <strong>{{ $chirp->user->name }}</strong> :
        {{ $chirp->message }}
    </p>
@endforeach

<hr>

<footer>
    <p style="text-align:center; margin-top:20px;">
        Win Raja Rahmatillah - 240170226
    </p>
</footer>

</body>
</html>
