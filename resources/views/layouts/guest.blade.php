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
    <meta property="og:url" content="https://www.rc-investment.net/">
    <meta property="og:locale" content="fr"/>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://www.rc-investment.net/">
    <meta name="description"
          content="Facilitation et échanges commerciaux, Supply Chain et logistique (dédouanement en import et export), Soudures industrielles et maintenances des engins lourds et de génie civile, la location des mains d’œuvres dans différents domaines et la location des matériels roulants, engins lourds de génie civile et truck et le Commerce international.">
    <meta property="og:description"
          content="Facilitation et échanges commerciaux, Supply Chain et logistique (dédouanement en import et export), Soudures industrielles et maintenances des engins lourds et de génie civile, la location des mains d’œuvres dans différents domaines et la location des matériels roulants, engins lourds de génie civile et truck et le Commerce international.">
    <meta property="og:image" content="/images/og/logo.png">
    <meta name="twitter:image" content="/images/og/logo.png">

    <title>{{ config('app.name') }} - {{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/logos/logo.svg') }}" type="image/png">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logos/logo.svg') }}"/>
    <link rel="manifest" href="">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/logos/logo.svg') }}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{ asset('assets/logos/logo.svg') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('assets/logos/logo.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-hidden overflow-y-auto antialiased" style="scroll-behavior:smooth;">
<x-header/>
<div class="flex flex-col gap-y-20 md:gap-y-32 overflow-hidden">
    {{ $slot }}
</div>
<x-footer/>
</body>
</html>
