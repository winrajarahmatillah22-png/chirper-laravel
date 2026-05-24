<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Register</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        body{
            margin:0;
            padding:0;
            min-height:100vh;

            background:
            linear-gradient(
                to bottom right,
                #0a0014,
                #17002b,
                #090011
            );

            overflow-y:auto;
            font-family:sans-serif;
        }

        .bg-anime{
            position:fixed;
            inset:0;
            z-index:-1;
            opacity:0.25;
        }

        .bg-anime img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

        .glass{
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(14px);
            border:1px solid rgba(255,255,255,0.08);
        }

        .neon{
            box-shadow:
            0 0 10px #d400ff,
            0 0 20px #9d00ff,
            0 0 40px #6a00ff;
        }

        .glow{
            text-shadow:
            0 0 10px #ff00ff,
            0 0 20px #a855f7;
        }

    </style>

</head>

<body class="text-white flex items-center justify-center px-5 py-10">

    <!-- BACKGROUND -->
    <div class="bg-anime">

        <img
            src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1400&auto=format&fit=crop"
        >

    </div>

    <!-- REGISTER BOX -->
    <div class="glass neon w-full max-w-md rounded-[35px] p-8">

        <!-- LOGO -->
        <div class="text-center">

            <h1 class="text-6xl font-bold text-fuchsia-400 glow">
                WRR
            </h1>

            <h2 class="text-3xl font-bold mt-2 text-fuchsia-300">
                Register
            </h2>

            <p class="text-gray-300 mt-3">
                Join The Cyber World ✨
            </p>

        </div>

        <!-- FORM -->
        <form method="POST" action="{{ route('register') }}" class="mt-10">

            @csrf

            <!-- NAME -->
            <input
                type="text"
                name="name"
                placeholder="Masukkan Nama"
                required
                class="w-full bg-black/30 border border-fuchsia-500 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
            >

            <!-- EMAIL -->
            <input
                type="email"
                name="email"
                placeholder="Masukkan Email"
                required
                class="w-full mt-5 bg-black/30 border border-fuchsia-500 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
            >

            <!-- PASSWORD -->
            <input
                type="password"
                name="password"
                placeholder="Masukkan Password"
                required
                class="w-full mt-5 bg-black/30 border border-fuchsia-500 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
            >

            <!-- CONFIRM -->
            <input
                type="password"
                name="password_confirmation"
                placeholder="Konfirmasi Password"
                required
                class="w-full mt-5 bg-black/30 border border-fuchsia-500 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
            >

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full mt-7 bg-fuchsia-600 hover:bg-fuchsia-700 py-4 rounded-2xl text-xl font-bold transition neon"
            >
                🚀 Daftar WRR
            </button>

        </form>

        <!-- LOGIN -->
        <p class="text-center text-gray-400 mt-8">

            Sudah punya akun?

            <a
                href="{{ route('login') }}"
                class="text-fuchsia-400 font-bold hover:underline"
            >
                Login Sekarang
            </a>

        </p>

    </div>

</body>
</html>