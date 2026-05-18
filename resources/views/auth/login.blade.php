<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Chirper Login</title>

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

            overflow:hidden;
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
<body class="text-white flex items-center justify-center px-5">

    <!-- BACKGROUND -->
    <div class="bg-anime">

        <img
            src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1400&auto=format&fit=crop"
        >

    </div>

    <!-- LOGIN BOX -->
    <div class="glass neon w-full max-w-md rounded-[35px] p-8">

        <!-- LOGO -->
        <div class="text-center">

            <h1 class="text-6xl font-bold text-fuchsia-400 glow">
                WRR
            </h1>

            <h2 class="text-3xl font-bold mt-2 text-fuchsia-300">
                Chirper
            </h2>

            <p class="text-gray-300 mt-3">
                Cyber Social Platform ✨
            </p>

        </div>

        <!-- TITLE -->
        <div class="mt-10 text-center">

            <h3 class="text-3xl font-bold text-fuchsia-300">
                Selamat Datang
            </h3>

            <p class="text-gray-400 mt-2">
                Login untuk melanjutkan petualanganmu 😆
            </p>

        </div>

        <!-- LOGIN FORM -->
        <form method="POST" action="{{ route('login') }}" class="mt-8">

            @csrf

            <!-- EMAIL -->
            <div>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan Email"
                    required
                    class="w-full bg-black/30 border border-fuchsia-500 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
                >

            </div>

            <!-- PASSWORD -->
            <div class="mt-5">

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan Password"
                    required
                    class="w-full bg-black/30 border border-fuchsia-500 rounded-2xl px-5 py-4 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
                >

            </div>

            <!-- BUTTON -->
            <button
                type="submit"
                class="w-full mt-7 bg-fuchsia-600 hover:bg-fuchsia-700 py-4 rounded-2xl text-xl font-bold transition neon"
            >
                🚀 Masuk ke WRR
            </button>

        </form>

        <!-- DIVIDER -->
        <div class="flex items-center gap-4 mt-8">

            <div class="h-[1px] bg-gray-600 flex-1"></div>

            <p class="text-gray-400 text-sm">
                atau login cepat
            </p>

            <div class="h-[1px] bg-gray-600 flex-1"></div>

        </div>

        <!-- GOOGLE -->
        <button
            class="w-full mt-6 bg-white text-black py-4 rounded-2xl font-bold text-lg hover:bg-gray-200 transition"
        >
            🔵 Login dengan Google
        </button>

        <!-- DEMO -->
        <button
            class="w-full mt-4 bg-black/40 border border-fuchsia-500 py-4 rounded-2xl font-bold text-lg hover:bg-fuchsia-600 transition"
        >
            ⚡ Login Cepat
        </button>

        <!-- REGISTER -->
        <p class="text-center text-gray-400 mt-8">

            Belum punya akun?

            <a
                href="{{ route('register') }}"
                class="text-fuchsia-400 font-bold hover:underline"
            >
                Daftar Sekarang
            </a>

        </p>

    </div>

</body>
</html>