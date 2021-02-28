<div class="text-center my-5">
    <h2 class="my-5">Ajouter un fichier</h2>
    <form action="/admin-store" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
<div class="my-5">
    <h2 class="text-center my-5">Voir mes fichiers</h2>
</div>