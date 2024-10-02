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
<h5 class="modal-title" id="exampleModalLabel">ajout membres</h5>
<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="/ajout/membre" enctype="multipart/form-data" method="post">
@csrf

<div class="form-group">
          <label for="id_equi" class="form-label">Equipe</label>
          <select class="form-control" name="id_equi" >
          @foreach (\App\Models\Equipe::all() as $row)
          <option value="{{$row->id_equi}}">{{$row->nom_equi}}</option>
          @endforeach
          </select>
      </div>
<div class="form-group">
<label for="completeNom" class="form-label">Nom membre</label>
<input type="text" class="form-control" name="nom_mem" placeholder="Nom membre" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Prénom membre</label>
<input type="text" class="form-control" name="prenom_mem" placeholder="Prénom membre" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Date naissance</label>
<input type="date" class="form-control" name="datenaiss_mem" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Nationalite</label>
<input type="text" class="form-control" name="nationalite_mem" placeholder="Nationalite" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Adresse</label>
<input type="text" class="form-control" name="adress_mem" placeholder="Adresse" required>   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Téléphone</label>
<input type="text" class="form-control" name="tel_mem" placeholder="Téléphone" onkeypress="return forceInteger(event)" required> 
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
<input type="email" class="form-control" name="email_mem"  placeholder="Email" required>   
</div>

<div class="form-group">
<label for="sexe_mem" class="form-label">Sexe</label>
<select class="form-control" name="sexe_mem" required>
<option value="" > </option>
<option value="Homme">Homme</option>
<option value="Femme">Femme</option>
</select>
 </div>


<div class="form-group">
<label for="completeNom" class="form-label">Photos</label>
<input type="file" class="form-control" name="photo_mem" required>   
</div>

<div class="form-group">
          <label for="post_mem" class="form-label">Poste</label>
          <select class="form-control" name="post_mem" required>
          <option value=""> </option>
          <option value="President">Pdt Fondateur</option>
          <option value="President">Pdt d'Honneur</option>
          <option value="secretaire"> Secrétaire</option>
          <option value="tresorier">Trésorier </option>
          <option value="adjoints"> Adjoints</option>
          <option value="President">Coach principal</option>
          <option value="President">Coach assistant</option>
          <option value="President">Préparateur physique</option>
          <option value="President">Community Manager</option>
          </select>
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
      <th scope="col">Equipe</th> -->
      <th scope="col">@lang('public.Nom')</th>
      <th scope="col">@lang('public.Prénom')</th>
      <th scope="col">Naissance</th>
      <!-- <th scope="col">Nationalite</th>
      <th scope="col">Adresse</th> -->
      <th scope="col">@lang('public.Téléphone')</th>
      <!-- <th scope="col">Email</th> -->
      <!-- <th scope="col">Sexe</th> -->
      <th scope="col">@lang('public.Photos')</th>
      <th scope="col">Post</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($membres as $membre) 

  <tr>
      <!-- <td>{{$membre->id_mem}}</td>
      <td>{{$membre->id_equi}}</td> -->
      <td>{{$membre->nom_mem}}</td>
      <td>{{$membre->prenom_mem}}</td>
      <td>{{$membre->datenaiss_mem}}</td>
      <!-- <td>{{$membre->nationalite_mem}}</td>
      <td>{{$membre->adress_mem}}</td> -->
      <td>{{$membre->tel_mem}}</td>
      <!-- <td>{{$membre->email_mem}}</td> -->
      <!-- <td>{{$membre->sexe_mem}}</td> -->
      <td><img class="image" src="Bureau/{{$membre->photo_mem}}" alt=""> </td>
      <td>{{$membre->post_mem}}</td>
      <td>

      <button  value="{{$membre->id_mem}}" class="modifbtn" bordered_color="white"><img src="img/mod.png" width="30px"></button>
      <button value="{{$membre->id_mem}}" class="deletbtn" ><img src="img/SUP.png" width="30px"></button>
      </td>
      </tr>
     @endforeach
  </tbody>
</table>
</div>
  </div>
    </div>
     </div>
     </div>
     </div>

     <!-- modal MODIFIER-->
 <div class="modal fade" id="editModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">modifier membre</h5>
<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
</div>

<div class="modal-body">
<form action="/updatmem" enctype="multipart/form-data" method="post">
  @csrf
<input type="hidden" class="form-control" id="id" name="id_mem" > 

<div class="form-group">
          <label for="id_equi" class="form-label">Equipe</label>
          <select class="form-control" name="id_equi" id="idequi">
          @foreach (\App\Models\Equipe::all() as $row)
          <option value="{{$row->id_equi}}">{{$row->nom_equi}}</option>
          @endforeach
          </select>
      </div>
<div class="form-group">
<label for="completeNom" class="form-label">Nom memeur</label>
<input type="text" class="form-control" name="nom_mem" id="nom" >   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Prénom memeur</label>
<input type="text" class="form-control" name="prenom_mem" id="prenom">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Date naissance</label>
<input type="date" class="form-control" name="datenaiss_mem" id="date">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Nationalite</label>
<input type="text" class="form-control" name="nationalite_mem" id="nation">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Adresse</label>
<input type="text" class="form-control" name="adress_mem" id="adresse">   
</div>
<div class="form-group">
<label for="completeNom" class="form-label">Téléphone</label>
<input type="text" class="form-control" name="tel_mem" id="tel" onkeypress="return forceInteger(event)"> 
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
<input type="email" class="form-control" name="email_mem" id="mail">   
</div>

<div class="form-group">
<label for="sexe_mem" class="form-label">Sexe</label>
<select class="form-control" name="sexe_mem" id="sex">
<option value="" > </option>
<option value="Homme">Homme</option>
<option value="Femme">Femme</option>
</select>
 </div>

<div class="form-group">
<label for="completeNom" class="form-label">Photos</label>
<input type="file" class="form-control" name="photo_mem" id="phot">   
</div>

<div class="form-group">
          <label for="post_mem" class="form-label">Poste</label>
          <select class="form-control" name="post_mem" id="post">
          <option value=""> </option>
          <option value="President">Pdt Fondateur</option>
          <option value="President">Pdt d'Honneur</option>
          <option value="secretaire"> Secrétaire</option>
          <option value="tresorier">Trésorier </option>
          <option value="adjoints"> Adjoints</option>
          <option value="President">Coach principal</option>
          <option value="President">Coach assistant</option>
          <option value="President">Préparateur physique</option>
          <option value="President">Community Manager</option>
          </select>
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
          url : "/modifmem/"+id,
          success: function (response) {
            $("#id").val(response.membres.id_mem);
            $("#idequi").val(response.membres.id_equi);
            $("#nom").val(response.membres.nom_mem);
            $("#prenom").val(response.membres.prenom_mem);
            $("#date").val(response.membres.datenaiss_mem);
            $("#nation").val(response.membres.nationalite_mem);
            $("#adresse").val(response.membres.adress_mem);
            $("#tel").val(response.membres.tel_mem);
            $("#mail").val(response.membres.email_mem);
            $("#sex").val(response.membres.sexe_mem);
            $("#post").val(response.membres.post_mem);
            $("#phot").val(response.membres.photo_mem);
            
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
          url : "/suprimem/"+id,
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