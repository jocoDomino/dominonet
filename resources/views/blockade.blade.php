<!DOCTYPE HTML>
<html>
<head>
    <title>DominoNet</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <noscript>
        <link rel="stylesheet" href="/assets/css/noscript.css"/>
    </noscript>
    @vite('resources/css/app.css')
</head>
{{--<x-body>--}}
<body>
<div class="align-right m-5">
    @if (Route::has('login'))
        <livewire:welcome.navigation/>
    @endif
</div>
<div class="align-center" style="position: absolute; top: 50%; left: 45%">
    Under Construction
</div>
</body>
{{--</x-body>--}}

</html>
