<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">

    <h1 class="mb-4">Détails du livre</h1>

    <div class="card">
        <div class="card-body">

            <h5 class="card-title">
                {{ $livre->titre }}
            </h5>

            <p class="card-text">
                <strong>ISBN :</strong> {{ $livre->isbn }}
            </p>

            <p class="card-text">
                <strong>Prix :</strong> {{ $livre->prix }} DH
            </p>

            <p class="card-text">
                <strong>Auteur :</strong>
                {{ $livre->auteur->nom }}
                {{ $livre->auteur->prenom }}
            </p>

            <a href="{{ route('Livres.index') }}" class="btn btn-secondary">
                Retour à la liste
            </a>

        </div>
    </div>

</div>