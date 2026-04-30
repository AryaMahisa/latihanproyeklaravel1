<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>

    <div class="container-main px-4">

        <!-- Background glow -->
        <div class="absolute w-[500px] h-[500px] bg-indigo-500 opacity-30 blur-3xl rounded-full -top-24 -left-24"></div>
        <div class="absolute w-[400px] h-[400px] bg-cyan-400 opacity-30 blur-3xl rounded-full -bottom-24 -right-24"></div>

        <div class="max-w-2xl w-full">
            <div class="card-modern text-center">

                <h1 class="title">
                    Welcome to Chirper 🚀
                </h1>

                <p class="subtitle mt-4">
                    This is your brand new Laravel application. Time to make it sing (or chirp)!
                </p>

                <div class="mt-8 flex justify-center gap-4">
                    <button class="btn-primary">
                        Get Started
                    </button>
                </div>

            </div>
        </div>

    </div>
</x-layout>