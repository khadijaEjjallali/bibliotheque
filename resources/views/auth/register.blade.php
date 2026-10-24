
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Créer un compte</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br><br>

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}">
        <br><br>

        <label>Mot de passe :</label>
        <input type="password" name="password">
        <br><br>

        <label>Confirmer le mot de passe :</label>
        <input type="password" name="password_confirmation">
        <br><br>

        <button type="submit">S'inscrire</button>
    </form>

    <p>Déjà inscrit ?
        <a href="{{ route('login') }}">Se connecter</a>
    </p>
</body>
</html>
