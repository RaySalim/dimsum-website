<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('🥟 Dim Sum House') }} — {{ __('Authentic Cantonese Cuisine') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;500;700&family=Noto+Serif+SC:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-china-paper text-stone-800 font-sans antialiased">

    {{-- Navigation --}}
    <nav class="bg-china-red text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                 <a href="#" class="text-xl sm:text-2xl font-bold tracking-wide font-serif">
                     🥟 {{ __('🥟 Dim Sum House') }}
                 </a>
                 <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                     <a href="#home" class="hover:text-china-gold transition">{{ __('Home') }}</a>
                     <a href="#menu" class="hover:text-china-gold transition">{{ __('Menu') }}</a>
                     <a href="#culture" class="hover:text-china-gold transition">{{ __('Culture') }}</a>
                      <a href="{{ route('f1') }}" class="text-china-gold font-semibold hover:text-white transition bg-f1-red px-4 py-2 rounded-full text-xs uppercase tracking-wider">{{ __('f1_collab') }}</a>
                     <a href="#contact" class="hover:text-china-gold transition">{{ __('Contact') }}</a>
                    <div class="flex gap-2 ml-2 pl-2 border-l border-white/30">
                        <a href="{{ route('locale.switch', 'en') }}" class="hover:text-china-gold transition text-xs px-2 py-1 rounded {{ app()->getLocale() === 'en' ? 'bg-white/20 text-china-gold' : '' }}">EN</a>
                        <a href="{{ route('locale.switch', 'zh') }}" class="hover:text-china-gold transition text-xs px-2 py-1 rounded {{ app()->getLocale() === 'zh' ? 'bg-white/20 text-china-gold' : '' }}">中文</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Banner --}}
    <header id="home" class="relative bg-gradient-to-br from-china-red via-china-dark-red to-china-ink text-white overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 20px, #FFD700 20px, #FFD700 21px);"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32 relative">
            <div class="text-center">
                <p class="uppercase tracking-[0.3em] text-china-gold text-sm mb-4">{{ __('Authentic Cantonese Cuisine') }}</p>
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-serif font-black mb-6 leading-tight">
                    {{ __('Freshly Steamed Dim Sum,') }}<br class="hidden md:block">
                    {{ __('Served All Day') }}
                </h1>
                <p class="text-lg md:text-xl text-red-100 max-w-3xl mx-auto mb-10 leading-relaxed">
                    {{ __('From classic Siomai to silky Har Gow, every basket is handcrafted daily') }}
                    {{ __('and steamed to order at your table.') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#menu" class="inline-block bg-china-gold text-china-red font-bold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
                        {{ __('View Our Menu') }}
                    </a>
                    <a href="#contact" class="inline-block border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white/10 transition">
                        {{ __('Find Us') }}
                    </a>
                </div>
            </div>
        </div>
        <div class="h-16 bg-gradient-to-b from-china-ink to-china-paper"></div>
    </header>

    {{-- Stats Section --}}
    <section class="bg-china-ink text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl md:text-5xl font-serif font-black text-china-gold mb-2">30+</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('years_title') }}</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-serif font-black text-china-gold mb-2">50+</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('dishes_title') }}</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-serif font-black text-china-gold mb-2">10K+</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('guests_title') }}</div>
                </div>
                <div>
                    <div class="text-4xl md:text-5xl font-serif font-black text-china-gold mb-2">12</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('awards_title') }}</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Culture Section --}}
    <section id="culture" class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-china-red text-sm mb-2 font-medium">{{ __('Culture') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-china-ink mb-4">{{ __('The Art of Dim Sum') }}</h2>
                <div class="w-24 h-1 bg-china-gold mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 text-stone-600 leading-relaxed">
                    <p class="text-lg">{{ __('Dim sum is more than just food — it is a centuries-old Cantonese tradition of gathering around small plates, sharing laughter, and savoring the finest handcrafted delicacies.') }}</p>
                    <p>{{ __('Each dish is a testament to the skill and patience of our master chefs, who have dedicated their lives to perfecting the art of dim sum.') }}</p>
                    <div class="bg-china-paper border-l-4 border-china-red p-6 rounded-r-lg">
                        <p class="text-china-red font-serif italic text-lg">"一盅两件，饮茶倾偈"</p>
                        <p class="text-sm text-stone-500 mt-2">— 广东茶楼俗语，意为"一壶茶两件点心，边饮茶边聊天"</p>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-china-red to-china-dark-red rounded-2xl p-8 text-white shadow-2xl">
                    <h3 class="text-2xl font-serif font-bold mb-4">{{ __('Our Heritage') }}</h3>
                    <p class="text-red-100 mb-4 leading-relaxed">{{ __('Established in 1995, Dim Sum House brings the authentic flavors of Guangzhou to your table. Our recipes have been passed down through three generations of master chefs.') }}</p>
                    <p class="text-red-100 leading-relaxed">{{ __('Every morning, our chefs arrive before dawn to prepare the freshest ingredients, ensuring that each dumpling, bun, and roll meets our exacting standards.') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Menu Section --}}
    <section id="menu" class="py-16 md:py-24 bg-china-paper">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-china-red text-sm mb-2 font-medium">{{ __('Our Menu') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-china-ink mb-4">{{ __('House Favorites') }}</h2>
                <p class="text-stone-500 mt-3 max-w-2xl mx-auto">{{ __('Served in steamer baskets, made fresh every hour.') }}</p>
                <div class="w-24 h-1 bg-china-gold mx-auto mt-6"></div>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                {{-- Siomai --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Siomai') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱199') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Juicy pork and shrimp dumplings wrapped in thin skin, topped with') }}
                            {{ __('sesame seeds and served with our signature soy-ginger dip.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('8 pieces per plate') }}</p>
                    </div>
                </article>

                {{-- Har Gow --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Har Gow') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱249') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Crystal-clear dumplings filled with plump shrimp, steamed until the') }}
                            {{ __('translucent wrapper glistens. A true Cantonese classic.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('8 pieces per plate') }}</p>
                    </div>
                </article>

                {{-- Steam Buns --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Steam Buns') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱179') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Fluffy cloud-soft buns stuffed with savory BBQ pork and a touch of') }}
                            {{ __('sweet hoisin, straight from the bamboo steamer.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('6 pieces per plate') }}</p>
                    </div>
                </article>

                {{-- Spring Rolls --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Spring Rolls') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱149') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Crispy golden rolls filled with vegetables and pork.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('4 pieces per plate') }}</p>
                    </div>
                </article>

                {{-- Egg Tart --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Egg Tart') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱99') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Buttery pastry shell filled with silky egg custard.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('3 pieces per plate') }}</p>
                    </div>
                </article>

                {{-- Chicken Feet --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Chicken Feet') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱129') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Braised chicken feet in savory black bean sauce.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('1 plate per order') }}</p>
                    </div>
                </article>

                {{-- Congee --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Congee') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱89') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Slow-cooked rice porridge with century egg and pork.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('1 bowl per order') }}</p>
                    </div>
                </article>

                {{-- Mango Pudding --}}
                <article class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all hover:-translate-y-1 group">
                    <div class="h-2 bg-gradient-to-r from-china-red to-china-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-china-ink">{{ __('Mango Pudding') }}</h3>
                            <span class="bg-china-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱59') }}</span>
                        </div>
                        <p class="text-stone-600 mb-4 text-sm leading-relaxed">
                            {{ __('Smooth mango pudding topped with fresh fruit.') }}
                        </p>
                        <p class="text-xs text-stone-400 font-medium">{{ __('1 bowl per order') }}</p>
                    </div>
                </article>
            </div>

            <p class="text-center text-stone-500 mt-10 text-sm">
                {{ __("All plates are shareable. Ask our staff for today's seasonal baskets.") }}
            </p>
        </div>
    </section>

    {{-- Gallery Section --}}
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-china-red text-sm mb-2 font-medium">{{ __('gallery_title') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-china-ink mb-4">{{ __('gallery_subtitle') }}</h2>
                <div class="w-24 h-1 bg-china-gold mx-auto"></div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-gradient-to-br from-china-red to-china-dark-red rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🥟</div>
                <div class="aspect-square bg-gradient-to-br from-china-gold to-yellow-600 rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🍤</div>
                <div class="aspect-square bg-gradient-to-br from-china-dark-red to-china-ink rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🧧</div>
                <div class="aspect-square bg-gradient-to-br from-red-400 to-china-red rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🍵</div>
                <div class="aspect-square bg-gradient-to-br from-china-ink to-stone-800 rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🍜</div>
                <div class="aspect-square bg-gradient-to-br from-china-red to-red-600 rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🥢</div>
                <div class="aspect-square bg-gradient-to-br from-yellow-500 to-china-gold rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">✨</div>
                <div class="aspect-square bg-gradient-to-br from-china-dark-red to-china-red rounded-2xl flex items-center justify-center text-6xl shadow-lg hover:shadow-2xl transition">🏮</div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-16 md:py-24 bg-gradient-to-r from-china-red via-china-dark-red to-china-ink text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(-45deg, transparent, transparent 15px, #FFD700 15px, #FFD700 16px);"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-4">{{ __('cta_title') }}</h2>
            <p class="text-xl text-red-100 mb-8">{{ __('cta_subtitle') }}</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="inline-block bg-china-gold text-china-red font-bold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
                    {{ __('book_now') }}
                </a>
                <a href="#menu" class="inline-block border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white/10 transition">
                    {{ __('learn_more') }}
                </a>
            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section id="contact" class="bg-stone-900 text-stone-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-china-gold text-sm mb-2 font-medium">{{ __('Visit Us') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white">{{ __('Contact Dim Sum House') }}</h2>
            </div>

            <div class="grid gap-10 md:grid-cols-2">
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <span class="text-china-gold text-2xl">📍</span>
                        <div>
                            <h3 class="font-semibold text-lg text-white">{{ __('Address') }}</h3>
                            <p class="text-stone-400">{{ __('123 Bamboo Street, Binondo District') }}<br>{{ __('Manila, Philippines 1006') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="text-china-gold text-2xl">📞</span>
                        <div>
                            <h3 class="font-semibold text-lg text-white">{{ __('Phone') }}</h3>
                            <p class="text-stone-400">{{ __('+63 2 8123 4567') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="text-china-gold text-2xl">✉️</span>
                        <div>
                            <h3 class="font-semibold text-lg text-white">{{ __('Email') }}</h3>
                            <p class="text-stone-400">{{ __('hello@dimsumhouse.example') }}</p>
                        </div>
                    </div>
                    <div class="flex gap-4">
                        <span class="text-china-gold text-2xl">🕒</span>
                        <div>
                            <h3 class="font-semibold text-lg text-white">{{ __('Hours') }}</h3>
                            <p class="text-stone-400">{{ __('Monday – Sunday, 10:00 AM – 10:00 PM') }}</p>
                        </div>
                    </div>
                </div>

                <form class="bg-stone-800 rounded-2xl p-6 space-y-4 border border-stone-700" action="#" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-stone-300 mb-1">{{ __('Name') }}</label>
                        <input id="name" type="text" name="name" required
                            class="w-full rounded-lg bg-stone-700 border border-stone-600 px-4 py-2.5 text-stone-100 placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-china-gold focus:border-transparent">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-stone-300 mb-1">{{ __('Email') }}</label>
                        <input id="email" type="email" name="email" required
                            class="w-full rounded-lg bg-stone-700 border border-stone-600 px-4 py-2.5 text-stone-100 placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-china-gold focus:border-transparent">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-stone-300 mb-1">{{ __('Message') }}</label>
                        <textarea id="message" name="message" rows="4" required
                            class="w-full rounded-lg bg-stone-700 border border-stone-600 px-4 py-2.5 text-stone-100 placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-china-gold focus:border-transparent"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full bg-china-gold text-china-ink font-bold px-6 py-3 rounded-lg hover:bg-yellow-300 transition">
                        {{ __('Send Message') }}
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-china-ink text-stone-400 text-center text-sm py-8 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-2xl mb-2">🥟 {{ __('🥟 Dim Sum House') }}</p>
            <p>&copy; {{ date('Y') }} {{ __('🥟 Dim Sum House') }}. {{ __('© All rights reserved.') }}</p>
        </div>
    </footer>

</body>
</html>
