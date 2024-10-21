<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <wireui:styles />
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <wireui:scripts />
</head>
<body class="font-sans antialiased">



    <main>
        {{ $slot }}
    </main>


    @livewireScripts
    @vite(['resources/js/flowbite.js'])
</body>
</html>
