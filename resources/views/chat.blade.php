<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Chat</title>

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
                rgba(0,0,0,0.85)
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
            border-top:1px solid rgba(255,255,255,0.1);

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

    <h1 class="text-4xl font-bold text-fuchsia-300">
        💬 WRR Chat
    </h1>

    <p class="text-gray-300 mt-2">
        Girls AI & pesan teman 😆✨
    </p>

</div>

<!-- STORIES -->
<div class="flex gap-4 overflow-x-auto px-5 pb-5">

    <!-- GIRLS AI -->
    <div class="flex flex-col items-center min-w-[80px]">

        <div
            class="w-20 h-20 rounded-full bg-gradient-to-b from-pink-500 to-purple-700 flex items-center justify-center text-3xl border-4 border-fuchsia-400"
        >
            🤖
        </div>

        <p class="mt-2 text-sm text-center">
            Girls AI
        </p>

    </div>

    <!-- USER -->
    <div class="flex flex-col items-center min-w-[80px]">

        <div
            class="w-20 h-20 rounded-full bg-gradient-to-b from-cyan-500 to-blue-700 flex items-center justify-center text-3xl"
        >
            👤
        </div>

        <p class="mt-2 text-sm">
            Hanabi
        </p>

    </div>

    <div class="flex flex-col items-center min-w-[80px]">

        <div
            class="w-20 h-20 rounded-full bg-gradient-to-b from-fuchsia-500 to-pink-700 flex items-center justify-center text-3xl"
        >
            👤
        </div>

        <p class="mt-2 text-sm">
            Sakura
        </p>

    </div>

</div>

<!-- CHAT LIST -->
<div class="px-5 pb-32 space-y-4">

    <!-- AI CHAT -->
    <div class="glass rounded-3xl p-5 flex items-center gap-4">

        <div
            class="w-16 h-16 rounded-full bg-gradient-to-b from-pink-500 to-purple-700 flex items-center justify-center text-3xl"
        >
            🤖
        </div>

        <div class="flex-1">

            <h2 class="text-xl font-bold text-fuchsia-300">
                Girls AI
            </h2>

            <p class="text-gray-300 mt-1">
                Halo sayang 😆💜 ada yang bisa aku bantu?
            </p>

        </div>

    </div>

    <!-- CHAT USER -->
    <div class="glass rounded-3xl p-5 flex items-center gap-4">

        <div
            class="w-16 h-16 rounded-full bg-gradient-to-b from-cyan-500 to-blue-700 flex items-center justify-center text-3xl"
        >
            👤
        </div>

        <div class="flex-1">

            <h2 class="text-xl font-bold">
                Hanabi
            </h2>

            <p class="text-gray-300 mt-1">
                Lagi apa 😆
            </p>

        </div>

    </div>

</div>

<!-- NAVBAR -->
<div class="bottom-nav">

    <a href="/home" class="nav-item">
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

    <a href="/chat" class="nav-item active">
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