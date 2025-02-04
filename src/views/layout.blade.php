<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    {css}
</head>
<body class="w-screen h-screen flex items-center justify-center">
    {{ $slot }}
    {css}
</body>
</html>