


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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @livewireStyles
</head>
<body>
    {{ $slot }}
    @livewireScripts
</body>
</html>