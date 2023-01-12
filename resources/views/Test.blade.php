<h1>Ajouter un disque dans une table</h1>
<form action="dataInsert" method="POST">
@csrf
<input type="text" name="Artiste" placeholder="Entrez le nom de l'artiste"> <br> <br>
<input type="text" name="Genre" placeholder="Entrez le genre"> <br> <br>
<input type="text" name="Annee" placeholder="Entrez l'année"> <br> <br>

<button type="submit">Ajouter le disque </button>
</form>
