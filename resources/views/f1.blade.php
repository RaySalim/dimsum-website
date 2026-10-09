<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('f1_hero_title') }} — {{ __('🥟 Dim Sum House') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@300;400;500;700&family=Noto+Serif+SC:wght@400;500;600;700;900&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-f1-black text-stone-200 font-sans antialiased">

    {{-- Navigation --}}
    <nav class="bg-f1-red text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="{{ route('home') }}" class="text-xl sm:text-2xl font-bold tracking-wide font-serif">
                    🥟 {{ __('🥟 Dim Sum House') }}
                </a>
                <div class="hidden md:flex items-center gap-6 text-sm font-medium">
                    <a href="{{ route('home') }}#home" class="hover:text-f1-gold transition">{{ __('Home') }}</a>
                    <a href="#menu" class="hover:text-f1-gold transition">{{ __('Menu') }}</a>
                    <a href="#drivers" class="hover:text-f1-gold transition">{{ __('f1_nav_drivers') }}</a>
                    <a href="#standings" class="hover:text-f1-gold transition">{{ __('f1_nav_standings') }}</a>
                    <a href="#pit-stop" class="hover:text-f1-gold transition">{{ __('f1_nav_pitstop') }}</a>
                    <div class="flex gap-2 ml-2 pl-2 border-l border-white/30">
                        <a href="{{ route('locale.switch', 'en') }}" class="hover:text-f1-gold transition text-xs px-2 py-1 rounded {{ app()->getLocale() === 'en' ? 'bg-white/20 text-f1-gold' : '' }}">EN</a>
                        <a href="{{ route('locale.switch', 'zh') }}" class="hover:text-f1-gold transition text-xs px-2 py-1 rounded {{ app()->getLocale() === 'zh' ? 'bg-white/20 text-f1-gold' : '' }}">中文</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- Hero Banner --}}
    <header id="home" class="relative bg-gradient-to-br from-f1-red via-f1-dark-red to-f1-black text-white overflow-hidden min-h-screen flex items-center">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(45deg, transparent, transparent 30px, #FFD700 30px, #FFD700 31px);"></div>
        </div>
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-10 w-64 h-64 bg-f1-gold rounded-full filter blur-3xl opacity-20 animate-pulse-slow"></div>
            <div class="absolute bottom-1/4 right-10 w-80 h-80 bg-f1-red rounded-full filter blur-3xl opacity-20"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-24 relative">
            <div class="text-center">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-4">{{ __('f1_hero_badge') }}</p>
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-serif font-black mb-6 leading-tight">
                    {{ __('f1_hero_title') }}<br class="hidden md:block">
                    {{ __('f1_hero_subtitle') }}
                </h1>
                <p class="text-lg md:text-xl text-red-100 max-w-3xl mx-auto mb-10 leading-relaxed">
                    {{ __('f1_hero_desc') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#menu" class="inline-block bg-f1-gold text-f1-red font-bold px-8 py-3 rounded-full shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
                        {{ __('f1_view_menu') }}
                    </a>
                    <a href="#drivers" class="inline-block border-2 border-white text-white font-semibold px-8 py-3 rounded-full hover:bg-white/10 transition">
                        {{ __('f1_meet_drivers') }}
                    </a>
                </div>
            </div>
        </div>

        {{-- Checkered flag finish line --}}
        <div class="absolute bottom-0 left-0 w-full h-8 bg-checkered"></div>
    </header>

    {{-- Race Weekend Stats --}}
    <section class="py-12 bg-f1-dark-red text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="bg-f1-black/50 rounded-xl p-6 border border-f1-gold/20">
                    <div class="text-4xl md:text-5xl font-serif font-black text-f1-gold mb-2">3</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('race_weekends') }}</div>
                </div>
                <div class="bg-f1-black/50 rounded-xl p-6 border border-f1-gold/20">
                    <div class="text-4xl md:text-5xl font-serif font-black text-f1-gold mb-2">12</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('race_teams') }}</div>
                </div>
                <div class="bg-f1-black/50 rounded-xl p-6 border border-f1-gold/20">
                    <div class="text-4xl md:text-5xl font-serif font-black text-f1-gold mb-2">46</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('menu_items') }}</div>
                </div>
                <div class="bg-f1-black/50 rounded-xl p-6 border border-f1-gold/20">
                    <div class="text-4xl md:text-5xl font-serif font-black text-f1-gold mb-2">🏆</div>
                    <div class="text-sm text-red-200 uppercase tracking-wider">{{ __('podium_finishes') }}</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Lights Out Countdown --}}
    <section id="countdown" class="py-16 md:py-24 bg-f1-black text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-5">
            <div class="absolute inset-0" style="background-image: repeating-linear-gradient(-45deg, transparent, transparent 24px, #E10620 24px, #E10620 25px);"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative">
            <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('countdown_sub') }}</p>
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-10">{{ __('countdown_title') }}</h2>

            <div class="grid grid-cols-4 gap-3 sm:gap-6 mb-6">
                <div class="bg-f1-red/10 border border-f1-gold/30 rounded-2xl py-6 sm:py-8">
                    <div id="countdown-days" class="text-4xl sm:text-6xl font-serif font-black text-f1-gold tabular-nums">00</div>
                    <div class="text-xs sm:text-sm text-stone-400 uppercase tracking-wider mt-2">{{ __('countdown_days') }}</div>
                </div>
                <div class="bg-f1-red/10 border border-f1-gold/30 rounded-2xl py-6 sm:py-8">
                    <div id="countdown-hours" class="text-4xl sm:text-6xl font-serif font-black text-f1-gold tabular-nums">00</div>
                    <div class="text-xs sm:text-sm text-stone-400 uppercase tracking-wider mt-2">{{ __('countdown_hours') }}</div>
                </div>
                <div class="bg-f1-red/10 border border-f1-gold/30 rounded-2xl py-6 sm:py-8">
                    <div id="countdown-minutes" class="text-4xl sm:text-6xl font-serif font-black text-f1-gold tabular-nums">00</div>
                    <div class="text-xs sm:text-sm text-stone-400 uppercase tracking-wider mt-2">{{ __('countdown_minutes') }}</div>
                </div>
                <div class="bg-f1-red/10 border border-f1-gold/30 rounded-2xl py-6 sm:py-8">
                    <div id="countdown-seconds" class="text-4xl sm:text-6xl font-serif font-black text-f1-gold tabular-nums">00</div>
                    <div class="text-xs sm:text-sm text-stone-400 uppercase tracking-wider mt-2">{{ __('countdown_seconds') }}</div>
                </div>
            </div>

            <p id="countdown-live" class="hidden text-f1-gold font-serif font-bold text-xl sm:text-2xl animate-pulse">{{ __('countdown_live') }}</p>
        </div>
    </section>

    {{-- The Story --}}
    <section class="py-16 md:py-24 bg-f1-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('the_collaboration') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">{{ __('speed_meets_steam') }}</h2>
                <div class="w-24 h-1 bg-f1-gold mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6 text-stone-300 leading-relaxed">
                    <p class="text-lg">{{ __('f1_story_1') }}</p>
                    <p>{{ __('f1_story_2') }}</p>
                    <div class="bg-f1-red/20 border-l-4 border-f1-gold p-6 rounded-r-lg">
                        <p class="text-f1-gold font-serif italic text-lg">{{ __('f1_story_quote') }}</p>
                    </div>
                </div>
                <div class="bg-gradient-to-r from-f1-red via-f1-dark-red to-f1-black rounded-2xl p-8 shadow-2xl border border-f1-gold/20">
                    <h3 class="text-2xl font-serif font-bold mb-4 text-f1-gold">{{ __('f1_special_title') }}</h3>
                    <p class="text-red-200 mb-4 leading-relaxed">{{ __('f1_special_desc_1') }}</p>
                    <p class="text-red-200 leading-relaxed">{{ __('f1_special_desc_2') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- F1 Race Menu --}}
    <section id="menu" class="py-16 md:py-24 bg-f1-dark-red">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('the_menu') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">{{ __('grand_prix_menu') }}</h2>
                <p class="text-red-200 mt-3 max-w-2xl mx-auto">{{ __('grand_prix_menu_sub') }}</p>
                <div class="w-24 h-1 bg-f1-gold mx-auto mt-6"></div>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                {{-- Speed King --}}
                <article class="bg-f1-black rounded-2xl shadow-md overflow-hidden border border-f1-gold/20 hover:border-f1-gold transition-all group">
                    <div class="h-2 bg-gradient-to-r from-f1-gold via-f1-red to-f1-yellow group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-white">{{ __('speed_king_siomai') }}</h3>
                            <span class="bg-f1-gold text-f1-red text-sm font-bold px-3 py-1 rounded-full">{{ __('₱299') }}</span>
                        </div>
                        <p class="text-stone-400 mb-4 text-sm leading-relaxed">
                            {{ __('speed_king_desc') }}
                        </p>
                        <p class="text-xs text-f1-gold font-medium">{{ __('speed_king_tag') }}</p>
                    </div>
                </article>

                {{-- Scuderia Har Gow --}}
                <article class="bg-f1-black rounded-2xl shadow-md overflow-hidden border border-f1-gold/20 hover:border-f1-gold transition-all group">
                    <div class="h-2 bg-gradient-to-r from-f1-red to-f1-gold group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-2xl font-serif font-bold text-f1-gold">{{ __('scuderia_har_gow') }}</h3>
                            <span class="bg-f1-red text-white text-sm font-bold px-3 py-1 rounded-full">{{ __('₱289') }}</span>
                        </div>
                        <p class="text-stone-400 mb-4 text-sm leading-relaxed">
                            {{ __('scuderia_desc') }}
                        </p>
                        <p class="text-xs text-f1-gold font-medium">{{ __('scuderia_tag') }}</p>
                    </div>
                </article>

                {{-- Mercedes Steam Buns --}}
                <article class="bg-f1-black rounded-2xl shadow-md overflow-hidden border border-f1-silver/40 hover:border-f1-silver transition-all group">
                    <div class="h-2 bg-gradient-to-r from-f1-silver to-f1-bronze group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-stone-300 text-2xl font-serif font-bold">{{ __('mercedes_steam_buns') }}</h3>
                            <span class="bg-f1-silver text-f1-black text-sm font-bold px-3 py-1 rounded-full">{{ __('₱269') }}</span>
                        </div>
                        <p class="text-stone-400 mb-4 text-sm leading-relaxed">
                            {{ __('mercedes_desc') }}
                        </p>
                        <p class="text-xs text-f1-gold font-medium">{{ __('mercedes_tag') }}</p>
                    </div>
                </article>

                {{-- Podium Spring Rolls --}}
                <article class="bg-f1-black rounded-2xl shadow-md overflow-hidden border border-f1-gold/20 hover:border-f1-gold transition-all group">
                    <div class="h-2 bg-gradient-to-r from-f1-bronze via-f1-gold to-f1-silver group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-f1-bronze text-2xl font-serif font-bold">{{ __('podium_spring_rolls') }}</h3>
                            <span class="bg-f1-gold text-f1-red text-sm font-bold px-3 py-1 rounded-full">{{ __('₱199') }}</span>
                        </div>
                        <p class="text-stone-400 mb-4 text-sm leading-relaxed">
                            {{ __('podium_desc') }}
                        </p>
                        <p class="text-xs text-f1-gold font-medium">{{ __('podium_tag') }}</p>
                    </div>
                </article>

                {{-- Checkered Flag Egg Tarts --}}
                <article class="bg-f1-black rounded-2xl shadow-md overflow-hidden border border-f1-gold/20 hover:border-f1-gold transition-all group">
                    <div class="h-2 bg-gradient-to-r from-f1-checkered to-f1-white group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-white text-2xl font-serif font-bold">{{ __('checkered_flag_egg_tarts') }}</h3>
                            <span class="bg-f1-white text-f1-black text-sm font-bold px-3 py-1 rounded-full">{{ __('₱129') }}</span>
                        </div>
                        <p class="text-stone-400 mb-4 text-sm leading-relaxed">
                            {{ __('checkered_desc') }}
                        </p>
                        <p class="text-xs text-f1-gold font-medium">{{ __('checkered_tag') }}</p>
                    </div>
                </article>

                {{-- Pit Lane Congee --}}
                <article class="bg-f1-black rounded-2xl shadow-md overflow-hidden border border-f1-gold/20 hover:border-f1-gold transition-all group">
                    <div class="h-2 bg-gradient-to-r from-f1-yellow to-f1-red group-hover:h-3 transition-all"></div>
                    <div class="p-6">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-f1-yellow text-2xl font-serif font-bold">{{ __('pit_lane_congee') }}</h3>
                            <span class="bg-f1-yellow text-f1-black text-sm font-bold px-3 py-1 rounded-full">{{ __('₱149') }}</span>
                        </div>
                        <p class="text-stone-400 mb-4 text-sm leading-relaxed">
                            {{ __('pit_lane_desc') }}
                        </p>
                        <p class="text-xs text-f1-gold font-medium">{{ __('pit_lane_tag') }}</p>
                    </div>
                </article>
            </div>

            <p class="text-center text-stone-400 mt-10 text-sm">
                {{ __('f1_menu_note') }}
            </p>
        </div>
    </section>

    {{-- Driver Profiles --}}
    <section id="drivers" class="py-16 md:py-24 bg-f1-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('the_team') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">{{ __('chef_drivers') }}</h2>
                <div class="w-24 h-1 bg-f1-gold mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Chef Master --}}
                <div class="bg-f1-red/10 border border-f1-red/30 rounded-2xl p-8 text-center">
                    <div class="w-24 h-24 bg-f1-red rounded-full mx-auto mb-4 flex items-center justify-center text-4xl">👨‍🍳</div>
                    <h3 class="text-xl font-bold text-f1-gold mb-2">{{ __('chef_professor') }}</h3>
                    <p class="text-sm text-stone-400 mb-3">{{ __('chef_professor_title') }}</p>
                    <p class="text-xs text-stone-500">{{ __('chef_professor_bio') }}</p>
                </div>

                {{-- Chef Speed --}}
                <div class="bg-f1-gold/10 border border-f1-gold/30 rounded-2xl p-8 text-center">
                    <div class="w-24 h-24 bg-f1-gold rounded-full mx-auto mb-4 flex items-center justify-center text-4xl">⚡</div>
                    <h3 class="text-xl font-bold text-white mb-2">{{ __('chef_lightning') }}</h3>
                    <p class="text-sm text-stone-400 mb-3">{{ __('chef_lightning_title') }}</p>
                    <p class="text-xs text-stone-500">{{ __('chef_lightning_bio') }}</p>
                </div>

                {{-- Chef Precision --}}
                <div class="bg-f1-silver/10 border border-f1-silver/40 rounded-2xl p-8 text-center">
                    <div class="w-24 h-24 bg-f1-silver rounded-full mx-auto mb-4 flex items-center justify-center text-4xl">🎯</div>
                    <h3 class="text-xl font-bold text-stone-300 mb-2">{{ __('chef_precision') }}</h3>
                    <p class="text-sm text-stone-400 mb-3">{{ __('chef_precision_title') }}</p>
                    <p class="text-xs text-stone-500">{{ __('chef_precision_bio') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Constructor Standings --}}
    <section id="standings" class="py-16 md:py-24 bg-f1-red text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('race_standings') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">{{ __('constructor_standings') }}</h2>
                <p class="text-red-200 mt-3 max-w-2xl mx-auto">{{ __('constructor_sub') }}</p>
                <div class="w-24 h-1 bg-f1-gold mx-auto mt-6"></div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-center">
                    <thead>
                        <tr class="border-b border-white/20">
                            <th class="pb-3 text-f1-gold text-sm uppercase tracking-wider">{{ __('pos') }}</th>
                            <th class="pb-3 text-left text-sm uppercase tracking-wider">{{ __('team') }}</th>
                            <th class="pb-3 text-sm uppercase tracking-wider">{{ __('points') }}</th>
                            <th class="pb-3 text-sm uppercase tracking-wider">{{ __('specialty') }}</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/10">
                        <tr class="hover:bg-white/5 transition">
                            <td class="py-3 font-bold text-f1-gold">🥇 1</td>
                            <td class="py-3 text-left font-semibold">{{ __('team_1') }}</td>
                            <td class="py-3">{{ __('team_1_points') }}</td>
                            <td class="py-3 text-sm text-stone-300">{{ __('team_1_specialty') }}</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="py-3 font-bold text-f1-silver">🥈 2</td>
                            <td class="py-3 text-left font-semibold">{{ __('team_2') }}</td>
                            <td class="py-3">{{ __('team_2_points') }}</td>
                            <td class="py-3 text-sm text-stone-300">{{ __('team_2_specialty') }}</td>
                        </tr>
                        <tr class="hover:bg-white/5 transition">
                            <td class="py-3 font-bold text-f1-bronze">🥉 3</td>
                            <td class="py-3 text-left font-semibold">{{ __('team_3') }}</td>
                            <td class="py-3">{{ __('team_3_points') }}</td>
                            <td class="py-3 text-sm text-stone-300">{{ __('team_3_specialty') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    {{-- Pit Stop Service --}}
    <section id="pit-stop" class="py-16 md:py-24 bg-f1-black text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('pit_stop_service') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">{{ __('pit_stop_title') }}</h2>
                <p class="text-stone-400 mt-3 max-w-2xl mx-auto">{{ __('pit_stop_sub') }}</p>
                <div class="w-24 h-1 bg-f1-gold mx-auto mt-6"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-f1-red/10 border border-f1-red/30 rounded-2xl p-8">
                    <div class="text-4xl mb-4">⚡</div>
                    <h3 class="text-xl font-bold text-f1-gold mb-2">{{ __('pit_2min') }}</h3>
                    <p class="text-sm text-stone-400">{{ __('pit_2min_desc') }}</p>
                </div>
                <div class="bg-f1-gold/10 border border-f1-gold/30 rounded-2xl p-8">
                    <div class="text-4xl mb-4">🔥</div>
                    <h3 class="text-xl font-bold text-white mb-2">{{ __('pit_hot') }}</h3>
                    <p class="text-sm text-stone-400">{{ __('pit_hot_desc') }}</p>
                </div>
                <div class="bg-f1-silver/10 border border-f1-silver/40 rounded-2xl p-8">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="text-xl font-bold text-stone-300 mb-2">{{ __('pit_guarantee') }}</h3>
                    <p class="text-sm text-stone-400">{{ __('pit_guarantee_desc') }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Race Weekend Schedule --}}
    <section class="py-16 md:py-24 bg-f1-dark-red text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <p class="uppercase tracking-[0.3em] text-f1-gold text-sm mb-2 font-medium">{{ __('schedule') }}</p>
                <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-4">{{ __('race_schedule') }}</h2>
                <div class="w-24 h-1 bg-f1-gold mx-auto"></div>
            </div>

            <div class="max-w-4xl mx-auto space-y-4">
                <div class="bg-f1-black/50 rounded-xl p-4 border border-f1-gold/20 flex items-center justify-between">
                    <div class="text-left">
                        <div class="font-bold text-f1-gold">{{ __('schedule_practice') }}</div>
                        <div class="text-sm text-stone-400">{{ __('schedule_practice_time') }}</div>
                    </div>
                    <span class="text-xs bg-f1-gold/20 text-f1-gold px-3 py-1 rounded-full">{{ __('schedule_live') }}</span>
                </div>
                <div class="bg-f1-black/50 rounded-xl p-4 border border-f1-gold/20 flex items-center justify-between">
                    <div class="text-left">
                        <div class="font-bold text-white">{{ __('schedule_qualifying') }}</div>
                        <div class="text-sm text-stone-400">{{ __('schedule_qualifying_time') }}</div>
                    </div>
                    <span class="text-xs bg-f1-red/20 text-f1-red px-3 py-1 rounded-full">{{ __('schedule_qualifying_note') }}</span>
                </div>
                <div class="bg-f1-black/50 rounded-xl p-4 border border-f1-gold/20 flex items-center justify-between">
                    <div class="text-left">
                        <div class="font-bold text-f1-yellow">{{ __('schedule_race') }}</div>
                        <div class="text-sm text-stone-400">{{ __('schedule_race_time') }}</div>
                    </div>
                    <span class="text-xs bg-f1-gold text-f1-red font-bold px-3 py-1 rounded-full">{{ __('schedule_race_note') }}</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Back to Home --}}
    <section class="py-12 bg-f1-black border-t border-f1-gold/20 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-f1-gold hover:text-white transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                {{ __('back_to_home') }}
            </a>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="bg-f1-black text-stone-400 text-center text-sm py-8 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4">
            <p class="text-2xl mb-2">🥟 {{ __('🥟 Dim Sum House') }} × {{ __('f1_partnership') }}</p>
            <p>&copy; {{ date('Y') }} {{ __('🥟 Dim Sum House') }}. {{ __('f1_partnership') }} {{ __('© All rights reserved.') }}</p>
        </div>
    </footer>

</body>
</html>
