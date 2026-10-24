
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Se connecter</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        <br><br>

        <label>Mot de passe :</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit">Se connecter</button>
    </form>

    <p>Vous n'avez pas de compte ?
        <a href="{{ route('register') }}">Créer un compte</a>
    </p>
</body>
</html>
