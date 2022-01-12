<!-- # 路徑 resources/views/layouts/app.blade.php -->
<html>

<head>

    @livewireStyles
</head>

<body>
<div>
    {{ $slot }}

</div>
    @livewireScripts
</body>

</html>
