<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WRR Chirper</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>

        body{
            background:
            linear-gradient(
                to bottom right,
                #0f001a,
                #1b0030,
                #090011
            );

            min-height:100vh;
            overflow-x:hidden;
        }

        .glass{
            background:rgba(255,255,255,0.05);
            backdrop-filter:blur(12px);
            border:1px solid rgba(255,255,255,0.08);
        }

        .neon{
            box-shadow:
            0 0 10px #c300ff,
            0 0 20px #8f00ff;
        }

        .glow-text{
            text-shadow:
            0 0 10px #d946ef,
            0 0 20px #a855f7;
        }

        .anime-bg{
            position:fixed;
            inset:0;
            z-index:-1;
            opacity:0.18;
        }

        .anime-bg img{
            width:100%;
            height:100%;
            object-fit:cover;
        }

    </style>

</head>
<body class="text-white">

    <!-- BACKGROUND -->
    <div class="anime-bg">

        <img
            src="https://images.unsplash.com/photo-1511512578047-dfb367046420?q=80&w=1400&auto=format&fit=crop"
        >

    </div>

    <!-- NAVBAR -->
    <nav class="glass neon flex justify-between items-center px-8 py-5">

        <div>

            <h1 class="text-4xl font-bold text-fuchsia-400 glow-text">
                WRR Chirper
            </h1>

            <p class="text-sm text-gray-300">
                Cyber Social Platform
            </p>

        </div>

        <div class="flex gap-3">

            <a
                href="/dashboard"
                class="bg-fuchsia-600 hover:bg-fuchsia-700 px-5 py-2 rounded-2xl font-semibold transition"
            >
                Dashboard
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    class="bg-red-500 hover:bg-red-600 px-5 py-2 rounded-2xl font-semibold transition"
                >
                    Logout
                </button>
            </form>

        </div>

    </nav>

    <!-- HERO -->
    <section class="text-center mt-14 px-5">

        <h2 class="text-6xl font-bold text-fuchsia-400 glow-text">
            Welcome To WRR
        </h2>

        <p class="mt-5 text-xl text-gray-300">
            Share your thoughts, stories, and digital adventures ✨
        </p>

    </section>

    <!-- POST FORM -->
    <div class="max-w-3xl mx-auto mt-12 glass neon p-8 rounded-3xl">

        <div class="flex items-center gap-4 mb-5">

            <div class="w-14 h-14 rounded-full bg-fuchsia-600 flex items-center justify-center text-2xl">
                🌙
            </div>

            <div>
                <h3 class="font-bold text-fuchsia-300">
                    {{ auth()->user()->name }}
                </h3>

                <p class="text-gray-400 text-sm">
                    WRR Member
                </p>
            </div>

        </div>

        <form
    method="POST"
    action="{{ route('chirps.store') }}"
    enctype="multipart/form-data"
>

    @csrf

    <textarea
        name="message"
        placeholder="Apa yang kamu pikirkan hari ini..."
        class="w-full h-32 bg-black/30 border border-fuchsia-500 rounded-3xl p-5 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
    ></textarea>

    <!-- PREVIEW -->
    <div
        id="preview-container"
        class="mt-5 hidden"
    >
        <img
            id="preview-image"
            class="rounded-3xl w-full max-h-[400px] object-cover"
        >
    </div>

    <!-- ACTION -->
    <div class="flex items-center justify-between mt-5">

        <!-- UPLOAD -->
        <label
            class="cursor-pointer bg-black/30 border border-fuchsia-500 hover:bg-fuchsia-600 transition px-5 py-3 rounded-2xl"
        >
            📸 Tambah Foto / Video

            <input
                type="file"
                name="image"
                accept="image/*,video/*"
                class="hidden"
                id="image-input"
            >
        </label>

        <!-- POST -->
        <button
            type="submit"
            class="bg-fuchsia-600 hover:bg-fuchsia-700 px-8 py-3 rounded-2xl font-bold text-lg transition neon"
        >
            🚀 Post Chirp
        </button>

    </div>

</form>

    </div>

    <!-- POSTS -->
    <div class="max-w-3xl mx-auto mt-12 space-y-8 pb-24">

        @foreach($chirps as $chirp)

        <div class="glass neon rounded-3xl p-6">

            <div class="flex justify-between items-center">

                <div class="flex items-center gap-4">

                    <div class="w-12 h-12 rounded-full bg-fuchsia-700 flex items-center justify-center">
                        ⚔️
                    </div>

                    <div>

                        <h3 class="font-bold text-fuchsia-300 text-lg">
                            {{ $chirp->user->name }}
                        </h3>

                        <p class="text-gray-400 text-sm">
                            {{ $chirp->created_at->diffForHumans() }}
                        </p>

                    </div>

                </div>

            </div>

            <p class="mt-6 text-lg leading-relaxed">
    {{ $chirp->message }}
</p>

@if($chirp->image)

    @php
        $extension = pathinfo($chirp->image, PATHINFO_EXTENSION);
    @endphp

    @if(in_array($extension, ['mp4', 'mov', 'avi']))

        <video
            controls
            class="mt-5 rounded-3xl w-full max-h-[500px]"
        >
            <source
                src="{{ asset('storage/' . $chirp->image) }}"
            >
        </video>

    @else

        <img
            src="{{ asset('storage/' . $chirp->image) }}"
            class="mt-5 rounded-3xl w-full max-h-[500px] object-cover"
        >

    @endif

@endif

<!-- ACTION BAR -->
<div class="flex items-center justify-between mt-6">

    <!-- LEFT ACTION -->
    <div class="flex items-center gap-5 text-xl">

        <form
    method="POST"
    action="{{ route('chirps.like', $chirp) }}"
>

    @csrf

    <button
        class="hover:text-pink-400 transition flex items-center gap-2"
    >
        ❤️

        <span>
            {{ $chirp->likes->count() }}
        </span>

    </button>

</form>

        <a
    href="#comment-form-{{ $chirp->id }}"
    class="hover:text-cyan-400 transition"
>
    💬
</a>

        <button
    onclick="navigator.share ? navigator.share({
        title: 'WRR Chirper',
        text: '{{ $chirp->message }}',
        url: window.location.href
    }) : alert('Share tidak didukung di browser ini')"
    class="hover:text-green-400 transition"
>
    📤
</button>

    </div>

    <!-- RIGHT ACTION -->
    <button class="hover:text-yellow-400 transition text-xl">
        🔖
    </button>

</div>

<!-- LIKE INFO -->
<p class="mt-4 text-sm text-gray-300">
    Disukai oleh <span class="font-bold text-fuchsia-300">WRR Members</span>
</p>

<!-- COMMENT FORM -->
<form
    id="comment-form-{{ $chirp->id }}"
    method="POST"
    action="{{ route('comments.store', $chirp) }}"
    class="mt-5"
>

    @csrf

    <div class="flex gap-3">

        <input
            type="text"
            name="comment"
            placeholder="Tulis komentar..."
            class="flex-1 bg-black/30 border border-fuchsia-500 rounded-2xl px-4 py-3 text-white focus:outline-none"
        >

        <button
            class="bg-fuchsia-600 hover:bg-fuchsia-700 px-5 rounded-2xl"
        >
            Kirim
        </button>

    </div>

</form>

<!-- COMMENTS -->
<div class="mt-5 space-y-3">

    @foreach($chirp->comments as $comment)

        <div class="flex justify-between items-center">

    <p class="text-gray-200 mt-1">
        {{ $comment->comment }}
    </p>

    @if($comment->user_id === auth()->id())

    <form
        method="POST"
        action="{{ route('comments.destroy', $comment) }}"
    >

        @csrf
        @method('DELETE')

        <button
            class="text-red-400 hover:text-red-600 text-sm"
        >
            🗑
        </button>

    </form>

    @endif

</div>
@endforeach
</div>

<!-- MENU -->
@if ($chirp->user_id === auth()->id())

<div class="mt-4">

    <details class="relative">

        <summary
            class="cursor-pointer list-none text-2xl text-right hover:text-fuchsia-400"
        >
            ⋮
        </summary>

        <div
            class="absolute right-0 mt-2 w-44 glass neon rounded-2xl p-3 space-y-2 z-50"
        >

            <a
                href="{{ route('chirps.edit', $chirp) }}"
                class="block hover:bg-fuchsia-600 px-3 py-2 rounded-xl transition"
            >
                ✏️ Edit Post
            </a>

            <form
                action="{{ route('chirps.destroy', $chirp) }}"
                method="POST"
            >
                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="w-full text-left hover:bg-red-600 px-3 py-2 rounded-xl transition"
                >
                    🗑 Delete Post
                </button>

            </form>

        </div>

    </details>

</div>

@endif

        @endforeach

    </div>

    <!-- FOOTER -->
    <footer class="text-center text-gray-400 pb-8">

        <h3 class="text-xl font-bold text-fuchsia-400">
            WRR
        </h3>

        <p class="mt-2">
            Win Raja Rahmatillah • Cyber Social Platform
        </p>

    </footer>


<script>

const input = document.getElementById('image-input');
const previewContainer = document.getElementById('preview-container');
const previewImage = document.getElementById('preview-image');

input.addEventListener('change', function(e){

    const file = e.target.files[0];

    if(file){

        previewContainer.classList.remove('hidden');

        previewImage.src = URL.createObjectURL(file);

    }

});

</script>

</body>
</html>