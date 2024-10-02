<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallerie</title>
    <link href="<?php echo asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('assets/vendors/themify-icons/css/themify-icons.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('assets/vendors/animate/animate.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('assets/css/front.css')?>" rel="stylesheet" type="text/css">
    <link href="<?php echo asset('css/gallerie.css')?>" rel="stylesheet" >

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" >

<!-- Navbar -->
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/Home')?>">@lang('public.Accueille')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/Actualiter')?>">@lang('public.Actualite')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/gallerie')?>">@lang('public.Gallerie')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/Listejoueur')?>">@lang('public.Joueurs')</a>
                </li>
                
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="/img/logo.png" class="brand-img" alt="">
                <span class="brand-txt">MMFC</span>
            </a>
            <ul class="navbar-nav">
            
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/resultat')?>">@lang('public.Resultat')<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/calendars')?>">@lang('public.Calendrier')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo asset('/sponsores')?>">@lang('public.Sponsor')</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle text-background-chocolate " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @lang('public.Langage')
                </a>
                    <div class="dropdown-menu" aria-labeledby="navbarDropdown">
                    <a href="locale/fr" class=" dropdown-item" >Français<i><img src="/img/french.png" width="30px" height="30px" alt=""></i></a>
                    <a href="locale/en" class=" dropdown-item" >English<i><img src="/img/enlish.png" width="30px" height="30px" alt=""></i></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="<?php echo asset('/Logins')?>" class="btn btn-primary">@lang('public.Connexion')</a>
                </li>
            </ul>
        </div>
    </nav>
    <div>
    <header id="home" class="sarygallary">
        <div class="overlay text-white text-center">
            
            <h2 class="display-4 mb-5">@lang('public.Gallerie')</h2>
            
        </div>
    </header>
    </div>
<div class="sary">
@foreach ($photos as $photo)
<div class="gallery">
  <a class="btne " id="{{$photo->id_photo}}"> 
    <img src="Photoe/{{$photo->url_photo}}" alt="Cinque Terre" >
  </a>
  
</div>

@endforeach
</div>

 <!-- modal sary-->

  <div class="modal fade" id="editModale" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="card w-100">
      <img src="" id="sary" width="765" height="400">
      </div>
      </div>
    </div>
</div>
</div>
<!-- page footer  -->
<div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-3">
                <h5><img src="img/mail.png">@lang('public.Email')</h5>
                <P class="text-muted">mmfc@gmail.com</P>
            </div>
            <div class="col-sm-3">
                <h5><img src="img/fb.png">Facebook</h5>
                <P class="text-muted">MMFC<br>
                    Maria Manjaka Football Club
                </P>
            </div>
            <div class="col-sm-3">
                <h5><img src="img/phones.png">@lang('public.Contacte')</h5>
                <P class="text-muted">+261 34 68 434 08
                </P>
            </div>
            <div class="col-sm-3">
                <h5><img src="img/marker.png">@lang('public.Localization')</h5>
                <P class="text-muted">Ecole Maria Manjaka<br>
                    Fianarantsoa, MADAGASCAR</P>
            </div>
            
            <div class="d-flex justify-content-center mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><img src="img/twitter.png"></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><img src="img/face.png"></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i>in</in></a>
                            <a class="btn btn-outline-light btn-square" href="#"><img src="img/insta.png"></i></a>
                        </div>
                        
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; @lang('public.Copie') <script>document.write(new Date().getFullYear())</script> @lang('public.Fait avec') <i class="ti-heart text-danger"></i> @lang('public.Par') <a>ARATO</a></p>
    </div>
    

    <!-- end of page footer -->
    <script src="<?php echo asset('assets/vendors/jquery/jquery-3.4.1.js')?>"></script>
    <script src="<?php echo asset('assets/vendors/bootstrap/bootstrap.bundle.js')?>"></script>
    <script src="<?php echo asset('assets/vendors/bootstrap/bootstrap.affix.js')?>"></script>
    <script src="<?php echo asset('assets/vendors/wow/wow.js')?>"></script>
    <script src="<?php echo asset('assets/js/front.js')?>"></script>
<script>
    $(document).ready(function() {
        $(document).on('click','.btne',function(){
            var id = $(this).attr('id');
            $('#editModale').modal('show');
            $.ajax({
                type: 'GET',
                url : "/gal/"+id,
                success: function (response) {
                $("#sary").attr('src','/Photoe/'+response.photo.url_photo);
                }
            })
        })
    })
</script>
</body>
</html>