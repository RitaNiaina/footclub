<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE JOUEUR</title>
</head>
<body>
<div align-center>
<h2>Liste des joueurs</h2>
<div class="card-body">
        <div class="table-responsive">
        <table bordered="5px" style="width:60%">
<thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénoms</th>
      <th scope="col">Naissance</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Taille</th>
      <th scope="col">Numero</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($joueurs as $joeur) 
    <tr>
      <td>{{$joeur->nom_jou}}</td>
      <td>{{$joeur->prenom_jou}}</td>
      <td>{{$joeur->datenaiss_jou}}</td>
      <td>{{$joeur->tel_jou}}</td>
      <td>{{$joeur->tail_jou}}</td>
      <td>{{$joeur->num_jou}}</td>
      </tr>
@endforeach
</tbody>
</table>
</div>
</div> 
</body>
</html>