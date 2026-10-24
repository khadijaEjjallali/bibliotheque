<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">

<h1 class="mb-4">Modifier un livre</h1>

 @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('Livres.update', $livre->id) }}">
    @csrf
    @method('PUT')
     <div class="mb-3">
    <label class="form-label">Titre :</label>
    <input type="text" name="titre" value="{{ $livre->titre }}" class="form-control">
</div>
    <br><br>
<div class="mb-3">
    <label class="form-label">ISBN :</label>
    <input type="text" name="isbn" value="{{ $livre->isbn }}"class="form-control">
</div>
    <br><br>
<div class="mb-3">
    <label class="form-label">Prix :</label>
    <input type="number" name="prix" value="{{ $livre->prix }}" class="form-control">
</div>
    <br><br>
<div class="mb-3">
    <label class="form-label">Auteur :</label>

    <select name="auteur_id" class="form-salect">
        @foreach($auteurs as $auteur)
            <option value="{{ $auteur->id }}"
                {{ $livre->auteur_id == $auteur->id ? 'selected' : '' }}>
                {{ $auteur->nom }} {{ $auteur->prenom }}
            </option>
        @endforeach
    </select>
    </div>

    <br><br>

    <button type="submit">Modifier</button>
</form>
</div>