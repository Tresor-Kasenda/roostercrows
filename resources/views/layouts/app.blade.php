<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="/images/logo.svg" type="image/png">
    <link rel="icon" type="image/svg+xml" href="/logo.svg"/>
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="192x192" href="/images/og/logo.png">
    <link rel="apple-touch-icon" sizes="512x512" href="/images/og/logo.png">
    <link rel="apple-touch-startup-image" href="/images/og/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,600;0,9..40,800;0,9..40,900;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,600&family=Open+Sans:wght@300;400;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600&family=Roboto+Slab:wght@100;200;300;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-hidden overflow-y-auto bg-body" style="scroll-behavior:smooth;">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <livewire:layout.navigation/>

    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <main>
        {{ $slot }}
    </main>
</div>
</body>
</html>
