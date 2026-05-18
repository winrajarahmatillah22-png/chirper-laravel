<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chirp</title>

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

    </style>

</head>
<body class="text-white flex items-center justify-center p-6">

    <div class="glass neon w-full max-w-2xl rounded-3xl p-8">

        <h1 class="text-4xl font-bold text-fuchsia-400 glow-text text-center">
            ✏️ Edit Chirp
        </h1>

        <p class="text-center text-gray-300 mt-3">
            Perbarui postinganmu di WRR Chirper ✨
        </p>

        <form
            method="POST"
            action="{{ route('chirps.update', $chirp) }}"
            class="mt-8"
        >
            @csrf
            @method('PATCH')

            <textarea
                name="message"
                required
                class="w-full h-40 bg-black/30 border border-fuchsia-500 rounded-3xl p-5 text-white focus:outline-none focus:ring-2 focus:ring-fuchsia-500"
            >{{ old('message', $chirp->message) }}</textarea>

            <div class="flex justify-between mt-6">

                <a
                    href="{{ route('chirps.index') }}"
                    class="bg-gray-600 hover:bg-gray-700 px-6 py-3 rounded-2xl font-bold transition"
                >
                    ← Back
                </a>

                <button
                    type="submit"
                    class="bg-fuchsia-600 hover:bg-fuchsia-700 px-6 py-3 rounded-2xl font-bold transition neon"
                >
                    🚀 Update Chirp
                </button>

            </div>

        </form>

    </div>

</body>
</html>