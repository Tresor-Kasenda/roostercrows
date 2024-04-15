@props([
    'title' => ''
])
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0">
    <meta name="language" content="fr">
    <meta name="robots" content="index">
    <meta name="robots" content="follow">
    <meta name="author" content="Kasenda Tresor Scott">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="generator" content=""/>
    <meta name="keywords"
          content="investissement, transport, logistique, service informatique, maintenance services, mon d'oeuvre, service et etalonnage, formation, optimisation de couts de l'energie,  ">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.roostercrowsinvest.net/">
    <meta property="og:locale" content="en"/>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://www.roostercrowsinvest.net/">
    <meta name="description"
          content="Facilitation et échanges commerciaux, Supply Chain et logistique (dédouanement en import et export), Soudures industrielles et maintenances des engins lourds et de génie civile, la location des mains d’œuvres dans différents domaines et la location des matériels roulants, engins lourds de génie civile et truck et le Commerce international.">
    <meta property="og:description"
          content="Facilitation et échanges commerciaux, Supply Chain et logistique (dédouanement en import et export), Soudures industrielles et maintenances des engins lourds et de génie civile, la location des mains d’œuvres dans différents domaines et la location des matériels roulants, engins lourds de génie civile et truck et le Commerce international.">
    <meta property="og:image" content="{{ asset('assets/images/og/logo.png') }}">
    <meta name="twitter:image" content="{{ asset('assets/images/og/logo.png') }}">
    <meta name="referrer" content="strict-origin-when-cross-origin"/>

    <meta property="og:title" content="Rooster crows investment"/>
    <meta property="og:description"
          content="Facilitation et échanges commerciaux, Supply Chain et logistique (dédouanement en import et export)"/>
    <meta property="og:image" content="{{ asset('assets/images/og/logo.png') }}"/>
    <meta property="og:image:alt"
          content="Soudures industrielles, maintenances des engins lourds, de génie civile, mains d’œuvres, location des matériels roulants, engins lourds de génie civile, truck, Commerce international"/>

    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/og/logo.png') }}"
          media="orientation: portrait"/>
    <link rel="apple-touch-startup-image" href="{{ asset('assets/images/og/logo.png') }}"
          media="orientation: landscape"/>

    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>

    <title>Rooster crows investment | {{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/logos/logo.svg') }}" type="image/png">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logos/logo.svg') }}"/>
    <link rel="icon" sizes="16x16 32x32 48x48" type="image/png" href="{{ asset('assets/logos/logo.svg') }}"/>
    <link rel="manifest" href="">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/logos/logo.svg') }}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{ asset('assets/logos/logo.svg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/logos/logo.svg') }}">
    <meta name="theme-color" content="#ee454d"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>
<body class="overflow-hidden font-poppins overflow-y-auto antialiased" style="scroll-behavior:smooth;">
<x-header/>
<main class="flex flex-col gap-y-20 md:gap-y-32 overflow-hidden">
    {{ $slot }}
</main>
<x-footer/>
</body>
</html>
