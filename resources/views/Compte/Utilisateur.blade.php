<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/utilisateur.css')?>" rel="stylesheet" >
    
</head>
<body >
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">

<a class="nav-link" href="<?php echo asset('/Home')?>">@lang('public.Accueille')</a>

<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle text-background-chocolate " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
@lang('public.Langage')
</a>
<div class="dropdown-menu" aria-labeledby="navbarDropdown">
<a href="locale/fr" class="dropdown-item" >Français<i><img src="/img/french.png" width="30px" height="30px" alt=""></i></a>
<a href="locale/en" class="dropdown-item" >English<i><img src="/img/enlish.png" width="30px" height="30px" alt=""></i></a>
</div>
</div>
</nav>

<div class="login">
<form action="/loginer" method="POST">
@csrf
<img class="img-profile rounded-circle" src='img/logo.png' width="100">
<i><h4>Maria Manjaka</h4></i>
<div class="card-body rounded-bottom bg p-5">
@if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error')}}
    </div>
@endif
<div class="form-group">
<input type="email" name="email" class="form-control cnx p-3" placeholder="@lang('public.Votre email')" required />
</div>
<div class="form-group">
<input type="password"  name="password" class="form-control cnx p-3" placeholder="@lang('public.Mot de passe')" required />
</div>
<div>
<button class="btn btn-dark btn-block cnx py-3" type="submit">@lang('public.Connexion')</button>
</div>
</div>
</form>
</div>
<script src="<?php echo asset('assets/vendors/jquery/jquery-3.4.1.js')?>"></script>
<script src="<?php echo asset('assets/vendors/bootstrap/bootstrap.bundle.js')?>"></script>
    

</body>

</html>
