<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        body{
            margin:0;
            padding:0;
            background:#090011;
            color:white;
            font-family:sans-serif;
        }

        .bg{
            position:fixed;
            inset:0;

            background:
            linear-gradient(
                rgba(0,0,0,0.75),
                rgba(0,0,0,0.92)
            ),
            url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1400&auto=format&fit=crop');

            background-size:cover;
            background-position:center;

            z-index:-1;
        }

        .glass{
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(15px);
            border:1px solid rgba(255,255,255,0.08);
        }

        .bottom-nav{
            position:fixed;
            bottom:0;
            left:0;
            width:100%;
            height:75px;

            background:rgba(10,0,20,0.95);

            display:flex;
            justify-content:space-around;
            align-items:center;

            z-index:999;
        }

        .nav-item{
            display:flex;
            flex-direction:column;
            align-items:center;
            color:#aaa;
            text-decoration:none;
            font-size:13px;
        }

        .nav-item.active{
            color:#ff4dff;
        }

        .plus-btn{
            width:60px;
            height:60px;
            border-radius:20px;

            background:
            linear-gradient(
                to right,
                #ff00ff,
                #6a00ff
            );

            display:flex;
            align-items:center;
            justify-content:center;

            color:white;
            font-size:35px;

            margin-top:-35px;

            box-shadow:0 0 20px #ff00ff;
        }

        textarea{
            resize:none;
            outline:none;
        }

    </style>

</head>
<body>

<div class="bg"></div>

<!-- TOP -->
<div class="p-5">

    <h1 class="text-5xl font-bold text-fuchsia-300">
        🌸 WRR Chirper
    </h1>

    <p class="text-gray-300 mt-3 text-lg">
        Hanabi cyber social media 😭🔥
    </p>

    <!-- SEARCH -->
    <div class="mt-6">

        <input
            type="text"
            placeholder="Cari akun..."
            class="w-full bg-black/40 border border-fuchsia-500 rounded-3xl px-6 py-4 text-white outline-none"
        >

    </div>

</div>

<!-- FILTER -->
<div class="flex gap-4 overflow-x-auto px-5 pb-5">

    <button
        class="bg-fuchsia-600 px-6 py-3 rounded-full text-lg font-bold"
    >
        Semua
    </button>

    <button
        class="glass px-6 py-3 rounded-full text-lg"
    >
        🎬 Video
    </button>

    <button
        class="glass px-6 py-3 rounded-full text-lg"
    >
        📷 Foto
    </button>

    <button
        class="glass px-6 py-3 rounded-full text-lg"
    >
        📝 Teks
    </button>

</div>

<!-- POSTS -->
<div class="px-5 pb-32 space-y-6">

    <!-- CREATE POST -->
    <form
        action="{{ route('posts.store') }}"
        method="POST"
        class="glass rounded-[35px] p-5"
    >
        @csrf

        <textarea
            name="content"
            rows="4"
            placeholder="Apa yang kamu pikirkan hari ini..."
            class="w-full bg-black/30 rounded-3xl p-5 text-white"
        ></textarea>

        <button
            type="submit"
            class="w-full mt-4 bg-gradient-to-r from-fuchsia-600 to-purple-700 py-4 rounded-3xl text-xl font-bold"
        >
            🚀 Posting Sekarang
        </button>

    </form>

    <!-- POST 1 -->
    <div class="glass rounded-[35px] overflow-hidden">

        <!-- TOP -->
        <div class="flex items-center gap-4 p-5">

            <div
                class="w-14 h-14 rounded-full bg-gradient-to-b from-fuchsia-500 to-purple-700 flex items-center justify-center text-2xl"
            >
                👤
            </div>

            <div class="flex-1">

                <h2 class="text-xl font-bold">
                    Hanabi
                </h2>

                <p class="text-gray-400">
                    2 menit lalu
                </p>

            </div>

            <button class="text-3xl">
                ⋮
            </button>

        </div>

        <!-- CAPTION -->
        <div class="px-5 pb-4">

            <p class="text-lg leading-relaxed">
                😭🔥 bermain cyber arena bersama teman
            </p>

        </div>

        <!-- IMAGE -->
        <img
            src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=1200&auto=format&fit=crop"
            class="w-full h-[400px] object-cover"
        />

        <!-- ACTION -->
        <div class="flex justify-between items-center p-5 text-lg">

            <button class="text-pink-400">
                ❤️ 120
            </button>

            <button class="text-cyan-400">
                💬 15
            </button>

            <button class="text-yellow-400">
                🔖 Save
            </button>

            <button class="text-green-400">
                ↗ Share
            </button>

        </div>

    </div>

    <!-- POST 2 -->
    <div class="glass rounded-[35px] p-6">

        <div class="flex items-center gap-4">

            <div
                class="w-14 h-14 rounded-full bg-gradient-to-b from-cyan-500 to-blue-700 flex items-center justify-center text-2xl"
            >
                👤
            </div>

            <div>

                <h2 class="text-xl font-bold">
                    Sakura
                </h2>

                <p class="text-gray-400">
                    10 menit lalu
                </p>

            </div>

        </div>

        <p class="mt-6 text-2xl leading-relaxed">
            Hari ini indah banget 😭💜✨
        </p>

        <!-- ACTION -->
        <div class="flex justify-between items-center mt-8 text-lg">

            <button class="text-pink-400">
                ❤️ 90
            </button>

            <button class="text-cyan-400">
                💬 20
            </button>

            <button class="text-yellow-400">
                🔖 Save
            </button>

            <button class="text-green-400">
                ↗ Share
            </button>

        </div>

    </div>

</div>

<!-- NAVBAR -->
<div class="bottom-nav">

    <a href="/home" class="nav-item active">
        🏠
        <span>Beranda</span>
    </a>

    <a href="/games" class="nav-item">
        🎮
        <span>Game</span>
    </a>

    <a href="/create" class="plus-btn">
        +
    </a>

    <a href="/chat" class="nav-item">
        💬
        <span>Chat</span>
    </a>

    <a href="/profile" class="nav-item">
        👤
        <span>Profil</span>
    </a>

</div>

</body>
</html>