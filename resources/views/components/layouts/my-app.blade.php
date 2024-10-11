<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Brand') }}</title>

    {{-- TAILWINDCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- THIRD PARTY PLUGIN FOR TAILWIND --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    {{-- MY CODE FOR TAILWIND --}}
    <script src="./js/tailwind-config.js"></script>
    <link rel="stylesheet" href="./css/tailwind-custom.css" type="text/tailwindcss">

    {{-- FLOWBITE CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <main class="w-full dark:bg-gray-800 min-h-screen">
        {{ $slot }}
    </main>

    {{-- FLOWBITE JS --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>