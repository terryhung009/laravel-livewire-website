<!-- # 路徑 resources/views/layouts/app.blade.php -->
<html>

<head>

    @livewireStyles
</head>

<body>
    {{ $slot }}

    @livewireScripts
</body>

</html>