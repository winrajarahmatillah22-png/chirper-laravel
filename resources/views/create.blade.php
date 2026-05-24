<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Create</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        body{
            margin:0;
            padding:0;
            overflow:hidden;
            background:black;
            color:white;
            font-family:sans-serif;
        }

        .camera-bg{
            position:fixed;
            inset:0;

            background:
            linear-gradient(
                rgba(0,0,0,0.2),
                rgba(0,0,0,0.6)
            ),
            url('https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1400&auto=format&fit=crop');

            background-size:cover;
            background-position:center;

            z-index:-1;
        }

        .bottom-nav{
            position:fixed;
            bottom:0;
            left:0;
            width:100%;
            height:85px;

            background:rgba(0,0,0,0.85);

            display:flex;
            justify-content:space-around;
            align-items:center;

            z-index:999;
        }

        .plus-btn{
            width:65px;
            height:65px;
            border-radius:22px;

            background:
            linear-gradient(
                to right,
                #ff00ff,
                #6a00ff
            );

            display:flex;
            align-items:center;
            justify-content:center;

            font-size:40px;
            color:white;

            margin-top:-35px;

            box-shadow:0 0 20px #ff00ff;
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

    </style>

</head>
<body>

<div class="camera-bg"></div>

<!-- TOP -->
<div class="flex justify-between items-center p-5">

    <a
        href="/chirps"
        class="text-5xl"
    >
        ✖
    </a>

    <div
        class="bg-black/50 px-8 py-3 rounded-full text-2xl font-bold"
    >
        🎵 Tambah suara
    </div>

    <div class="text-5xl">
        🔄
    </div>

</div>

<!-- RIGHT MENU -->
<div class="fixed right-5 top-40 flex flex-col gap-8 text-center text-4xl">

    <button>✨</button>

    <button>⏱</button>

    <button>🖼</button>

    <button>📏</button>

    <button>😊</button>

</div>

<!-- CAMERA -->
<div class="absolute bottom-40 left-0 w-full">

    <!-- MODE -->
    <div class="flex justify-center gap-6 text-2xl mb-8">

        <button class="text-gray-300">
            60 detik
        </button>

        <button class="text-white font-bold">
            15 detik
        </button>

        <button class="text-pink-400 font-bold">
            FOTO
        </button>

        <button class="text-white">
            TEKS
        </button>

    </div>

    <!-- BUTTON -->
    <div class="flex justify-center">

        <div
            class="w-28 h-28 rounded-full border-[8px] border-white"
        ></div>

    </div>

    <!-- BOTTOM -->
    <div class="flex justify-center gap-12 mt-10 text-3xl">

        <button class="font-bold">
            POSTING
        </button>

        <button>
            BUAT
        </button>

        <button>
            LIVE
        </button>

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