<!DOCTYPE html>
<html>
<head>
    <title>WRR Messages</title>
</head>
<body>

<h1>WRR Chat User</h1>

@foreach($users as $user)

<form
action="{{ route('messages.send') }}"
method="POST"
>

@csrf

<h3>{{ $user->name }}</h3>

<input
type="hidden"
name="receiver_id"
value="{{ $user->id }}"
>

<input
type="text"
name="message"
placeholder="Tulis pesan..."
>

<button type="submit">
Kirim
</button>

</form>

<hr>

@endforeach

</body>
</html>