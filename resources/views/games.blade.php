<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Games</title>

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
                rgba(0,0,0,0.7),
                rgba(0,0,0,0.9)
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

    </style>

</head>
<body>

<div class="bg"></div>

<!-- TOP -->
<div class="p-5">

    <h1 class="text-5xl font-bold text-fuchsia-300">
        🎮 WRR Games
    </h1>

    <p class="text-gray-300 mt-3 text-lg">
        Main game bersama teman 😆🔥
    </p>

</div>

<!-- GAMES -->
<div class="px-5 pb-32 grid gap-5">

    <!-- GAME CARD -->
    <div class="glass rounded-[35px] overflow-hidden">

        <img
            src="https://images.unsplash.com/photo-1542751371-adc38448a05e?q=80&w=1200&auto=format&fit=crop"
            class="w-full h-56 object-cover"
        >

        <div class="p-5">

            <h2 class="text-3xl font-bold text-fuchsia-300">
                Cyber Arena
            </h2>

            <p class="text-gray-300 mt-3">
                Battle online bersama player lain 😭🔥
            </p>

            <button
                class="w-full mt-5 bg-gradient-to-r from-fuchsia-600 to-purple-700 py-4 rounded-3xl text-xl font-bold"
            >
                ▶ Main Sekarang
            </button>

        </div>

    </div>

    <!-- GAME CARD -->
    <div class="glass rounded-[35px] overflow-hidden">

        <img
            src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1200&auto=format&fit=crop"
            class="w-full h-56 object-cover"
        >

        <div class="p-5">

            <h2 class="text-3xl font-bold text-cyan-300">
                Ninja Hanabi
            </h2>

            <p class="text-gray-300 mt-3">
                Petualangan anime cyber ninja 😆💜
            </p>

            <button
                class="w-full mt-5 bg-gradient-to-r from-cyan-600 to-blue-700 py-4 rounded-3xl text-xl font-bold"
            >
                ▶ Main Sekarang
            </button>

        </div>

    </div>

</div>

<!-- NAVBAR -->
<div class="bottom-nav">

    <a href="/home" class="nav-item">
        🏠
        <span>Beranda</span>
    </a>

    <a href="/games" class="nav-item active">
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