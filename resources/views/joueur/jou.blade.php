<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste joueurs</title>
    <link href="<?php echo asset('style.css')?>" rel="stylesheet" >
    <link href="<?php echo asset('vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')?>" rel="stylesheet">
  
    <link href="<?php echo asset('css/sb-admin-2.min.css')?>" rel="stylesheet">
   
    <link href="<?php echo asset('vendor/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
    <script type="text/javascript">
        function preventBack() {window.history.forward();}
        setTimeout("preventBack()",0);
        window.ountload=function(){null;}
    </script>
    
</head>
<body id="page-top">
<div>
  <!-- Page Wrapper -->
  <div id="wrapper">
      <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <img src="img/logo.png" width=40% alt="">
                <div class="sidebar-brand-text mx-3">MARIA MANJAKA<sup></sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            @lang('public.Interface')
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed"  data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-list"></i>
                    <span>@lang('public.EQUIPE')</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">@lang('public.Nouveaux')</h6>
                        <a class="collapse-item" href="<?php echo asset('/equipe');?>">@lang('public.Equipe')</a>
                        <a class="collapse-item" href="<?php echo asset('/joueures');?>">@lang('public.Joueures')</a>
                        <a class="collapse-item" href="<?php echo asset('/bureaux');?>">@lang('public.Membre')</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                MATCH
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>@lang('public.A propos')</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Match</h6>
                    <a class="collapse-item" href="<?php echo asset('/clubes');?>">@lang('public.Club')</a>
                    <a class="collapse-item" href="<?php echo asset('/champion');?>">@lang('public.Champion')</a>
                    
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">@lang('public.Liste')</h6>
                        <a class="collapse-item" href="<?php echo asset('/sponsore');?>">@lang('public.Sponsor')</a>
                        <a class="collapse-item" href="<?php echo asset('/titre');?>">@lang('public.Titre')</a>
                        <a class="collapse-item" href="<?php echo asset('/phots');?>">@lang('public.Gallerie')</a>
                    </div>
                </div>
            </li>
            
<!-- Divider -->
<hr class="sidebar-divider">
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo asset('/actualite');?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>@lang('public.Actualiter')</span></a>
            </li>
             <!-- Nav Item - Tables -->
             <li class="nav-item active">
                <a class="nav-link" href="<?php echo asset('/matches');?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>@lang('public.Calendrier/Résultat')</span></a>
            </li>
            
           
            
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>
                    
                    
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            
                            </a>
                            
                        
                        </li>

                    
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                        

                    </ul>
                    <div>
                        <a href="<?php echo asset('/Logins');?>"><button class="btn btn-white deconnexion" onclick='return confirm ("voullez vous vraiment quitter")'> @lang('public.Deconnexion')</button></a>
                        </div>/
                        <div>
                        <a href="<?php echo asset('/Comptes');?>"><button class="btn btn-white creer compte" onclick='return confirm ("voullez vous creer un compte")'>@lang('public.Creer compte')</button></a>
                        </div>
                        /
                        <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-background-chocolate " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @lang('public.Langage')
                    </a>
                    <div class="dropdown-menu" aria-labeledby="navbarDropdown">
                    <a href="locale/fr" class=" dropdown-item" >Français<i><img src="/img/french.png" width="30px" height="30px" alt=""></i></a>
                    <a href="locale/en" class=" dropdown-item" >English<i><img src="/img/enlish.png" width="30px" height="30px" alt=""></i></a>
                    </div>
                   
                 </div>
                </nav>
<div class="card shadow mb-4">
    <div class="card-header py-3">
      
        <!-- Modal -->
<div class="modal fade" id="completModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">ajout joueur</h5>
<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="/ajout/joueur" enctype="multipart/form-data" method="post">
@csrf

<div class="form-group">
          <label for="id_tit" class="form-label">Titre</label>
          <select class="form-control" name="id_tit" >
          @foreach (\App\Models\Titre::all() as $row)
          <option value="{{$row->id_tit}}">{{$row->nom_tit}}</option>
          @endforeach
          </select>
      </div>
<div class="form-group">
          <label for="id_equi" class="form-label">Equipe</label>
          <select class="form-control" name="id_equi" >
          @foreach (\App\Models\Equipe::all() as $row)
          <option value="{{$row->id_equi}}">{{$row->nom_equi}}</option>
          @endforeach
          </select>
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Nom joueur</label>
<input type="text" class="form-control" name="nom_jou" placeholder="Nom joueur" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Prénom joueur</label>
<input type="text" class="form-control" name="prenom_jou" placeholder="Prénom joueur" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Date naissance</label>
<input type="date" class="form-control" name="datenaiss_jou" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Age joueur</label>
<input type="text" class="form-control" name="age_jou" placeholder="Age joueur" onkeypress="return forceInteger(event)" required>  
<script>
						
function forceInteger(evt)
{
var mimi= (evt.which)? evt.which: evt.keyCode;
if(mimi> 31 && (mimi < 48 || mimi > 57))
return false;
return true;
}
						
</script>  
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Nationalite</label>
<input type="text" class="form-control" name="nationalite_jou" placeholder="Nationalite" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Adresse</label>
<input type="text" class="form-control" name="adress_jou" placeholder="Adresse" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Téléphone</label>
<input type="text" class="form-control" name="tel_jou" placeholder="Téléphone"  onkeypress="return forceInteger(event)" required> 
<script>
						
function forceInteger(evt)
{
var mimi= (evt.which)? evt.which: evt.keyCode;
if(mimi> 31 && (mimi < 48 || mimi > 57))
return false;
return true;
}
						
</script>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Email</label>
<input type="email" class="form-control" name="email_jou" placeholder="Email" required>   
</div>

<div class="form-group">
<label for="sexe_jou" class="form-label">Sexe</label>
<select class="form-control" name="sexe_jou" >
<option value="" > </option>
<option value="Homme">Homme</option>
<option value="Femme">Femme</option>
</select>
 </div>
<div class="form-group">
<label for="completeNom" class="form-label">Taille</label>
<input type="text" class="form-control" name="tail_jou" placeholder="Taille" required>   
</div>
<div class="form-group">
<label for="pied_jou" class="form-label">Pied</label>
<select class="form-control" name="pied_jou" required>
<option value="" > </option>
<option value="Gauche">Gauche</option>
<option value="Droite">Droite</option>
</select> 
</div>

<div class="form-group">
<label for="completeNom" class="form-label">Photos</label>
<input type="file" class="form-control" name="photo_jou" >   
</div>

<div class="form-group">
          <label for="post_jou" class="form-label">Poste</label>
          <select class="form-control" name="post_jou">
          <option value=""> </option>
          <option value="Gardien de but">Gardien de but </option>
          <option value="Arrière latéral droit"> Arrière latéral droit</option>
          <option value="Arrière latéral gauche">Arrière latéral gauche </option>
          <option value="Défense centrale"> Défense centrale</option>
          <option value="balayeur">balayeur </option>
          <option value="Milieu de terrain défensif"> Milieu de terrain défensif</option>
          <option value="Milieu de terrain droit">Milieu de terrain droit</option>
          <option value="Milieu de terrain central"> Milieu de terrain central</option>
          <option value="En avant"> En avant</option>
          <option value="Milieu de terrain offensif">Milieu de terrain offensif</option>
          <option value="Milieu de terrain gauche"> Milieu de terrain gauche</option>
          </select>
      </div>
<div class="form-group">
<label for="completeNom" class="form-label">Numéro</label>
<input type="text" class="form-control" name="num_jou" placeholder="Numéro" onkeypress="return forceInteger(event)" required>
<script>
						
function forceInteger(evt)
{
var mimi= (evt.which)? evt.which: evt.keyCode;
if(mimi> 31 && (mimi < 48 || mimi > 57))
return false;
return true;
}
						
</script> 

</div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="submit" class="btn btn-success" >@lang('public.AJOUT')</button>
      <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#completModale">
@lang('public.AJOUT')
</button>
</div>
<div class="card-body rounded-bottom bg p-5">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success')}}
    </div>
@endif
<div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
    <tr>
      <!-- <th scope="col">Id</th>
      <th scope="col">Titre</th>
      <th scope="col">Equipe</th> -->
      <th scope="col">@lang('public.Nom')</th>
      <th scope="col">@lang('public.Prénom')</th>
      <th scope="col">Naissance</th>
      <!-- <th scope="col">Nationalite</th> -->
      <!-- <th scope="col">Adresse</th> -->
      <th scope="col">@lang('public.Téléphone')</th>
      <!-- <th scope="col">Email</th> -->
      <!-- <th scope="col">Sexe</th> -->
      <th scope="col">@lang('public.Taille')</th>
      <!-- <th scope="col">Pied</th> -->
      <th scope="col">@lang('public.Photos')</th>
      <!-- <th scope="col">Post</th> -->
      <th scope="col">@lang('public.Numero')</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($joueurs as $joeur) 

  <tr>
      <!-- <td>{{$joeur->id_jou}}</td>
      <td>{{$joeur->id_tit}}</td>
      <td>{{$joeur->id_equi}}</td> -->
      <td>{{$joeur->nom_jou}}</td>
      <td>{{$joeur->prenom_jou}}</td>
      <td>{{$joeur->datenaiss_jou}}</td>
      <!-- <td>{{$joeur->nationalite_jou}}</td> -->
      <!-- <td>{{$joeur->adress_jou}}</td> -->
      <td>{{$joeur->tel_jou}}</td>
      <!-- <td>{{$joeur->email_jou}}</td> -->
      <!-- <td>{{$joeur->sexe_jou}}</td> -->
      <td>{{$joeur->tail_jou}}</td>
      <!-- <td>{{$joeur->pied_jou}}</td> -->
      <td><img class="image" src="joueur/{{$joeur->photo_jou}}" alt=""> </td>
      <!-- <td>{{$joeur->post_jou}}</td> -->
      <td>{{$joeur->num_jou}}</td>
      <td>

      <button  value="{{$joeur->id_jou}}" class="modifbtn" bordered_color="white"><img src="img/mod.png" width="30px"></button>
      <button value="{{$joeur->id_jou}}" class="deletbtn" ><img src="img/SUP.png" width="30px"></button>
      </td>
      </tr>
     @endforeach
  </tbody>
</table>
</div>
  </div>
  <p>Impression   <a href="<?php echo asset('/generate-pdf');?>"><button  class="button" bordered="none"><img src="img/print.png" width="20px"></button></a></p>
    </div>
     </div>
     </div>
     </div>

     <!-- modal MODIFIER-->
 <div class="modal fade" id="editModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">modifier joueurs</h5>
<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
<form action="/updatjoueu" enctype="multipart/form-data" method="post">
  @csrf
<input type="hidden" class="form-control" id="id" name="id_jou" > 

<div class="form-group">
          <label for="id_tit" class="form-label">Titre</label>
          <select class="form-control" name="id_tit" id="idtit">
          @foreach (\App\Models\Titre::all() as $row)
          <option value="{{$row->id_tit}}">{{$row->nom_tit}}</option>
          @endforeach
          </select>
      </div>
<div class="form-group">
          <label for="id_equi" class="form-label">Equipe</label>
          <select class="form-control" name="id_equi" id="idequi">
          @foreach (\App\Models\Equipe::all() as $row)
          <option value="{{$row->id_equi}}">{{$row->nom_equi}}</option>
          @endforeach
          </select>
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Nom joueur</label>
<input type="text" class="form-control" name="nom_jou" id="nom" >   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Prénom joueur</label>
<input type="text" class="form-control" name="prenom_jou" id="prenom">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Date naissance</label>
<input type="date" class="form-control" name="datenaiss_jou" id="date">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Age joueur</label>
<input type="text" class="form-control" name="age_jou" placeholder="Age joueur" id="age" onkeypress="return forceInteger(event)" required>  
<script>
						
function forceInteger(evt)
{
var mimi= (evt.which)? evt.which: evt.keyCode;
if(mimi> 31 && (mimi < 48 || mimi > 57))
return false;
return true;
}
						
</script>  
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Nationalite</label>
<input type="text" class="form-control" name="nationalite_jou" id="nation">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Adresse</label>
<input type="text" class="form-control" name="adress_jou" id="adresse">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Téléphone</label>
<input type="text" class="form-control" name="tel_jou" id="tele" onkeypress="return forceInteger(event)">  
<script>
						
function forceInteger(evt)
{
var mimi= (evt.which)? evt.which: evt.keyCode;
if(mimi> 31 && (mimi < 48 || mimi > 57))
return false;
return true;
}
						
</script> 
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Email</label>
<input type="email" class="form-control" name="email_jou" id="mail">   
</div>

<div class="form-group">
<label for="sexe_jou" class="form-label">Sexe</label>
<select class="form-control" name="sexe_jou" id="sex">
<option value="" > </option>
<option value="Homme">Homme</option>
<option value="Femme">Femme</option>
</select>
 </div>
 <div class="form-group">
<label for="completeNom" class="form-label">Taille</label>
<input type="text" class="form-control" name="tail_jou" id="Taille">   
</div>
<div class="form-group">
<label for="pied_jou" class="form-label">Pied</label>
<select class="form-control" name="pied_jou" id="pied">
<option value="" > </option>
<option value="Gauche">Gauche</option>
<option value="Droite">Droite</option>
</select> 
</div>

<div class="form-group">
<label for="completeNom" class="form-label">Photos</label>
<input type="file" class="form-control" name="photo_jou" id="phot">   
</div>

<div class="form-group">
          <label for="post_jou" class="form-label">Poste</label>
          <select class="form-control" name="post_jou" id="post">
          <option value=""> </option>
          <option value="Gardien de but">Gardien de but </option>
          <option value="Arrière latéral droit"> Arrière latéral droit</option>
          <option value="Arrière latéral gauche">Arrière latéral gauche </option>
          <option value="Défense centrale"> Défense centrale</option>
          <option value="balayeur">balayeur </option>
          <option value="Milieu de terrain défensif"> Milieu de terrain défensif</option>
          <option value="Milieu de terrain droit">Milieu de terrain droit</option>
          <option value="Milieu de terrain central"> Milieu de terrain central</option>
          <option value="En avant"> En avant</option>
          <option value="Milieu de terrain offensif">Milieu de terrain offensif</option>
          <option value="Milieu de terrain gauche"> Milieu de terrain gauche</option>
          </select>
      </div>
<div class="form-group">
<label for="completeNom" class="form-label">Numéro</label>
<input type="text" class="form-control" name="num_jou" id="num">   
</div>
      </div>
      <div class="modal-footer">
      <button type="submit" name="submit" class="btn btn-success" >@lang('public.Modifier')</button>
      <button type="button" class="btn btn-dark" data-dismiss="modal">Annuler</button>
      </form>
      </div>
    </div>
  </div>
</div>
</div>
    <script src="<?php echo asset('vendor/jquery/jquery.min.js')?>"></script>
    <script src="<?php echo asset('vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo asset('vendor/jquery-easing/jquery.easing.min.js')?>"></script>
    <!-- Custom scripts for all pages-->
  <script src="<?php echo asset('sweetalert/sweetalert2.all.min.js')?>"></script>
  <script src="<?php echo asset('js/sb-admin-2.min.js')?>"></script>
  <script src="<?php echo asset('vendor/datatables/jquery.dataTables.min.js')?>"></script>
  <script src="<?php echo asset('vendor/datatables/dataTables.bootstrap4.min.js')?>"></script>
  <script src="<?php echo asset('js/demo/datatables-demo.js')?>"></script>

  <script>
    $(function () {
      
      $(document).on('click' , '.modifbtn' , function() {
        let id = $(this).val();
        
        $('#editModale').modal('show');
        $.ajax({
          type : "GET",
          url : "/modifjoueur/"+id,
          success: function (response) {
            $("#id").val(response.joueurs.id_jou);
            $("#idtit").val(response.joueurs.id_tit);
            $("#idequi").val(response.joueurs.id_equi);
            $("#nom").val(response.joueurs.nom_jou);
            $("#prenom").val(response.joueurs.prenom_jou);
            $("#date").val(response.joueurs.datenaiss_jou);
            $("#age").val(response.joueurs.age_jou);
            $("#nation").val(response.joueurs.nationalite_jou);
            $("#adresse").val(response.joueurs.adress_jou);
            $("#tele").val(response.joueurs.tel_jou);
            $("#mail").val(response.joueurs.email_jou);
            $("#sex").val(response.joueurs.sexe_jou);
            $("#Taille").val(response.joueurs.tail_jou);
            $("#pied").val(response.joueurs.pied_jou);
            $("#post").val(response.joueurs.post_jou);
            $("#num").val(response.joueurs.num_jou);
            $("#phot").val(response.joueurs.photo_jou);
            
          }
        })
      })

      $(document).on('click' , '.deletbtn' , function() {
  let id = $(this).val();
  Swal.fire({
  title: 'Vous etes sur?',
  text: "de suprimer cet élément",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: 'green',
  cancelButtonColor: '#d33',
  confirmButtonText: 'oui, suprime le!'
  }).then((result) => {
  if (result.isConfirmed) {
    $.ajax({
          type : "GET",
          url : "/suprimjou/"+id,
  success: function (response) {
   Swal.fire(
      'Suprimer!',
      'votre info est suprimer.',
      'success'
    ).then(()=>{
    window.location.reload();
  })
  }
})
  }
})
    })
  })
  </script>

</body>
</html>