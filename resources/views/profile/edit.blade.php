<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Profile</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>

        body{
            margin:0;
            padding:0;
            background:#090011;
            font-family:sans-serif;
            color:white;
        }

        .bg{
            position:fixed;
            inset:0;
            background:
            linear-gradient(
                rgba(0,0,0,0.7),
                rgba(0,0,0,0.8)
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

        .neon{
            box-shadow:
            0 0 10px #d400ff,
            0 0 20px #9d00ff,
            0 0 40px #6a00ff;
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
            backdrop-filter:blur(15px);
        }

        .nav-item{
            display:flex;
            flex-direction:column;
            align-items:center;
            color:#aaa;
            font-size:13px;
            text-decoration:none;
        }

        .nav-item.active{
            color:#ff4dff;
        }

        .plus-btn{
            width:60px;
            height:60px;
            border-radius:20px;
            background:linear-gradient(to right,#ff00ff,#6a00ff);
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:35px;
            margin-top:-35px;
            color:white;
            box-shadow:0 0 20px #ff00ff;
        }

        .settings-box{
            display:none;
        }

        .settings-box.active{
            display:block;
        }

    </style>

</head>
<body>

<div class="bg"></div>

<!-- TOP -->
<div class="flex items-center justify-between p-5">

    <h1 class="text-3xl font-bold text-fuchsia-300">
        Profile
    </h1>

    <button
        onclick="toggleSettings()"
        class="text-4xl"
    >
        ⚙️
    </button>

</div>

<!-- SETTINGS -->
<div
    id="settingsMenu"
    class="settings-box fixed top-20 right-5 glass neon rounded-3xl p-5 w-[260px] z-50"
>

    <div class="space-y-4">

        <button class="w-full bg-fuchsia-600 py-3 rounded-2xl">
            ✏️ Edit Profil
        </button>

        <button class="w-full bg-black/40 py-3 rounded-2xl">
            🔒 Privasi
        </button>

        <button class="w-full bg-black/40 py-3 rounded-2xl">
            🌙 Dark Mode
        </button>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="w-full bg-red-600 py-3 rounded-2xl">
                🚪 Logout
            </button>
        </form>

        <form
            method="POST"
            action="{{ route('profile.destroy') }}"
            onsubmit="return confirm('Hapus akun permanen?')"
        >
            @csrf
            @method('DELETE')

            <button class="w-full bg-black border border-red-500 py-3 rounded-2xl">
                🗑 Hapus Akun Permanen
            </button>

        </form>

    </div>

</div>

<!-- PROFILE -->
<div class="px-5 pb-32">

    <div class="glass neon rounded-[35px] p-8 text-center">

        <!-- AVATAR -->
        <div
            class="w-36 h-36 rounded-full bg-gradient-to-b from-fuchsia-500 to-purple-700 mx-auto flex items-center justify-center text-7xl font-bold"
        >
            {{ strtoupper(substr(Auth::user()->name,0,1)) }}
        </div>

        <!-- NAME -->
        <h1 class="text-5xl font-bold mt-6 text-fuchsia-200">
            {{ Auth::user()->name }}
        </h1>

        <!-- EMAIL -->
        <p class="text-gray-300 mt-3 text-lg">
            {{ Auth::user()->email }}
        </p>

        <!-- BIO -->
        <p class="mt-5 text-gray-300">
            {{ Auth::user()->bio ?? 'Belum ada bio 😆✨' }}
        </p>

        <!-- STATS -->
        <div class="grid grid-cols-3 gap-4 mt-10">

            <div class="glass rounded-3xl p-5">
                <h2 class="text-4xl text-pink-400 font-bold">
                    {{ Auth::user()->chirps()->count() }}
                </h2>

                <p class="mt-2 text-gray-300">
                    Postingan
                </p>
            </div>

            <div class="glass rounded-3xl p-5">
                <h2 class="text-4xl text-cyan-400 font-bold">
                    0
                </h2>

                <p class="mt-2 text-gray-300">
                    Followers
                </p>
            </div>

            <div class="glass rounded-3xl p-5">
                <h2 class="text-4xl text-pink-400 font-bold">
                    0
                </h2>

                <p class="mt-2 text-gray-300">
                    Following
                </p>
            </div>

        </div>

        <!-- EDIT -->
        <button
            class="w-full mt-8 bg-gradient-to-r from-fuchsia-600 to-purple-700 py-5 rounded-3xl text-2xl font-bold neon"
        >
            ✏️ Edit Profile
        </button>

    </div>

    <!-- TAB -->
    <div class="flex justify-around mt-8 glass rounded-3xl p-4 text-lg">

        <button class="text-fuchsia-400 font-bold">
            📷 Foto
        </button>

        <button>
            🎬 Video
        </button>

        <button>
            📝 Teks
        </button>

        <button>
            ❤️ Disukai
        </button>

    </div>

    <!-- POSTS -->
    <div class="grid grid-cols-3 gap-3 mt-8">

        @foreach(Auth::user()->chirps as $chirp)

            <div class="glass rounded-2xl overflow-hidden">

                <div class="h-40 bg-black/40 flex items-center justify-center text-center p-3">

                    <p class="text-sm">
                        {{ $chirp->message }}
                    </p>

                </div>

            </div>

        @endforeach

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

    <a href="/profile" class="nav-item active">
        👤
        <span>Profil</span>
    </a>

</div>

<script>

    function toggleSettings(){

        document
        .getElementById('settingsMenu')
        .classList
        .toggle('active');

    }

</script>

</body>
</html>