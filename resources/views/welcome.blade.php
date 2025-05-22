<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Laipni lūdzam</title>
</head>
<body>
    <h1>Laipni lūdzam manā Laravel projektā!</h1>

    @guest
        <p><a href="{{ route('login') }}">Pierakstīties</a> vai <a href="{{ route('register') }}">Reģistrēties</a></p>
    @endguest

    @auth
        <p>Sveiks, {{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Atteikties</button>
        </form>
    @endauth
</body>
</html>
