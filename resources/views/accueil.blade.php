<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer un e-mail</title>
</head>
<body>

    <h1>Envoyer un e-mail</h1>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <form action="{{ route('mail.envoyer') }}" method="POST">
        @csrf

        <div>
            <label for="sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet"
                   value="{{ old('sujet') }}" required>
            @error('sujet')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message"
                      required>{{ old('message') }}</textarea>
            @error('message')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">Envoyer l'e-mail</button>
    </form>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>

</body>
</html>