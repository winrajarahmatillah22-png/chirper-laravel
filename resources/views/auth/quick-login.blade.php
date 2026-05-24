<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Quick Login</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-black text-white flex items-center justify-center min-h-screen">

    <form
        method="POST"
        action="/quick-login"
        class="bg-fuchsia-950/50 border border-fuchsia-500 p-10 rounded-3xl w-full max-w-md space-y-6"
    >

        @csrf

        <h1 class="text-4xl font-bold text-center text-fuchsia-400">
            ⚡ WRR Quick Login
        </h1>

        <input
            type="text"
            name="nickname"
            placeholder="Nama Panggilan"
            required
            class="w-full p-4 rounded-2xl bg-black/40 border border-fuchsia-500"
        >

        <input
            type="date"
            name="birthdate"
            required
            class="w-full p-4 rounded-2xl bg-black/40 border border-fuchsia-500"
        >

        <button
            class="w-full bg-fuchsia-600 hover:bg-fuchsia-700 py-4 rounded-2xl font-bold"
        >
            🚀 Masuk WRR
        </button>

    </form>

</body>
</html>