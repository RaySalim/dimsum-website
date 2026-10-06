<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dim Sum House — Authentic Cantonese Dim Sum</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-amber-50 text-stone-800 font-sans antialiased">

    {{-- Navigation --}}
    <nav class="bg-red-700 text-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold tracking-wide">
                🥟 Dim Sum House
            </a>
            <div class="hidden md:flex gap-6 text-sm font-medium">
                <a href="#home" class="hover:text-amber-300 transition">Home</a>
                <a href="#menu" class="hover:text-amber-300 transition">Menu</a>
                <a href="#contact" class="hover:text-amber-300 transition">Contact</a>
            </div>
        </div>
    </nav>

    {{-- Hero Banner --}}
    <header id="home" class="relative bg-gradient-to-br from-red-700 via-red-600 to-amber-500 text-white">
        <div class="max-w-6xl mx-auto px-4 py-20 md:py-28 text-center">
            <p class="uppercase tracking-[0.3em] text-amber-200 text-sm mb-4">Authentic Cantonese Cuisine</p>
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                Freshly Steamed Dim Sum,<br class="hidden md:block"> Served All Day
            </h1>
            <p class="text-lg md:text-xl text-red-100 max-w-2xl mx-auto mb-8">
                From classic Siomai to silky Har Gow, every basket is handcrafted daily
                and steamed to order at your table.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#menu" class="inline-block bg-white text-red-700 font-semibold px-8 py-3 rounded-full shadow hover:bg-amber-100 transition">
                    View Our Menu
                </a>
                <a href="#contact" class="inline-block border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white/10 transition">
                    Find Us
                </a>
            </div>
        </div>
        <div class="h-16 bg-gradient-to-b from-amber-500 to-amber-50"></div>
    </header>

    {{-- Menu Section --}}
    <section id="menu" class="max-w-6xl mx-auto px-4 py-16 md:py-24">
        <div class="text-center mb-12">
            <p class="uppercase tracking-[0.3em] text-red-600 text-sm mb-2">Our Menu</p>
            <h2 class="text-3xl md:text-4xl font-bold text-stone-900">House Favorites</h2>
            <p class="text-stone-500 mt-3">Served in steamer baskets, made fresh every hour.</p>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            {{-- Siomai --}}
            <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-2 bg-gradient-to-r from-red-500 to-amber-400"></div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-2xl font-bold text-stone-900">Siomai</h3>
                        <span class="bg-red-700 text-white text-sm font-semibold px-3 py-1 rounded-full">₱199</span>
                    </div>
                    <p class="text-stone-600 mb-4">
                        Juicy pork and shrimp dumplings wrapped in thin skin, topped with
                        sesame seeds and served with our signature soy-ginger dip.
                    </p>
                    <p class="text-sm text-stone-400">8 pieces per plate</p>
                </div>
            </article>

            {{-- Har Gow --}}
            <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-2 bg-gradient-to-r from-red-500 to-amber-400"></div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-2xl font-bold text-stone-900">Har Gow</h3>
                        <span class="bg-red-700 text-white text-sm font-semibold px-3 py-1 rounded-full">₱249</span>
                    </div>
                    <p class="text-stone-600 mb-4">
                        Crystal-clear dumplings filled with plump shrimp, steamed until the
                        translucent wrapper glistens. A true Cantonese classic.
                    </p>
                    <p class="text-sm text-stone-400">8 pieces per plate</p>
                </div>
            </article>

            {{-- Steam Buns --}}
            <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                <div class="h-2 bg-gradient-to-r from-red-500 to-amber-400"></div>
                <div class="p-6">
                    <div class="flex items-start justify-between mb-3">
                        <h3 class="text-2xl font-bold text-stone-900">Steam Buns</h3>
                        <span class="bg-red-700 text-white text-sm font-semibold px-3 py-1 rounded-full">₱179</span>
                    </div>
                    <p class="text-stone-600 mb-4">
                        Fluffy cloud-soft buns stuffed with savory BBQ pork and a touch of
                        sweet hoisin, straight from the bamboo steamer.
                    </p>
                    <p class="text-sm text-stone-400">6 pieces per plate</p>
                </div>
            </article>
        </div>

        <p class="text-center text-stone-500 mt-10 text-sm">
            All plates are shareable. Ask our staff for today's seasonal baskets.
        </p>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="bg-stone-900 text-stone-100">
        <div class="max-w-6xl mx-auto px-4 py-16 md:py-24">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-amber-400 text-sm mb-2">Visit Us</p>
                <h2 class="text-3xl md:text-4xl font-bold">Contact Dim Sum House</h2>
            </div>

            <div class="grid gap-10 md:grid-cols-2">
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <span class="text-amber-400 text-2xl">📍</span>
                        <div>
                            <h3 class="font-semibold text-lg">Address</h3>
                            <p class="text-stone-400">123 Bamboo Street, Binondo District<br>Manila, Philippines 1006</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="text-amber-400 text-2xl">📞</span>
                        <div>
                            <h3 class="font-semibold text-lg">Phone</h3>
                            <p class="text-stone-400">+63 2 8123 4567</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="text-amber-400 text-2xl">✉️</span>
                        <div>
                            <h3 class="font-semibold text-lg">Email</h3>
                            <p class="text-stone-400">hello@dimsumhouse.example</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="text-amber-400 text-2xl">🕒</span>
                        <div>
                            <h3 class="font-semibold text-lg">Hours</h3>
                            <p class="text-stone-400">Monday – Sunday, 10:00 AM – 10:00 PM</p>
                        </div>
                    </div>
                </div>

                <form class="bg-stone-800 rounded-2xl p-6 space-y-4" action="#" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-stone-300 mb-1">Name</label>
                        <input id="name" type="text" name="name" required
                            class="w-full rounded-lg bg-stone-700 border border-stone-600 px-4 py-2.5 text-stone-100 placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-stone-300 mb-1">Email</label>
                        <input id="email" type="email" name="email" required
                            class="w-full rounded-lg bg-stone-700 border border-stone-600 px-4 py-2.5 text-stone-100 placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-stone-300 mb-1">Message</label>
                        <textarea id="message" name="message" rows="4" required
                            class="w-full rounded-lg bg-stone-700 border border-stone-600 px-4 py-2.5 text-stone-100 placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-transparent"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-amber-400 text-stone-900 font-semibold px-6 py-3 rounded-lg hover:bg-amber-300 transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-stone-950 text-stone-500 text-center text-sm py-6">
        <p>&copy; {{ date('Y') }} Dim Sum House. All rights reserved.</p>
    </footer>

</body>
</html>
