<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-4">
    <h1 class="mb-4">Ajouter un livre </h1>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
    <form method="POST" action="{{ route('Livres.store') }}">   
        @csrf
        <div class="mb-3">
        <label>Titre :</label>
        <input type="text" name="titre">
        </div>
     <br><br>
     <div class="mb-3">
        <label>ISBN</label>
        <input type="text" name="isbn">
        </div>
     <br><br>
     <div class="mb-3">
        <label>Prix</label>
        <input type="number" name="prix">
        </div>
     <br><br>
     
        <button type="submit" class="btn btn-success">Ajouter</button>
      <br><br>
      <div class="mb-3">
        <label class="form-label">Auteur:</label>
        <select name="auteur_id">
      @foreach($auteurs as $auteur)
      <option value="{{ $auteur->id }}">
        {{ $auteur->nom }} {{ $auteur->prenom }}
</option>
@endforeach
</select>
</div>


    </form>
    </div>
