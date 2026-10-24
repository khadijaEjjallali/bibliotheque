<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Livres</title>
</head>

<body>

    <div class="container mt-4">

        <h1 class="mb-4">Liste des livres</h1>

        <a href="{{ route('Livres.create') }}" class="btn btn-success mb-4">
            Ajouter un livre
        </a>

        @foreach($livres as $livre)

            <div class="card mb-3">

                <div class="card-body">

                    <h5 class="card-title">
                        {{ $livre->titre }}
                    </h5>

                    <p class="card-text">
                        Auteur :
                        {{ $livre->auteur->nom }}
                        {{ $livre->auteur->prenom }}
                    </p>

                    <p class="card-text">
                        Prix : {{ $livre->prix }} DH
                    </p>

                    <a href="{{ route('Livres.show', $livre->id) }}"
                       class="btn btn-info">
                        Voir
                    </a>

                    <a href="{{ route('Livres.edit', $livre->id) }}"
                       class="btn btn-primary">
                        Modifier
                    </a>

                    <form method="POST"
                          action="{{ route('Livres.destroy', $livre->id) }}"
                          class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Supprimer
                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    </div>

</body>
</html>