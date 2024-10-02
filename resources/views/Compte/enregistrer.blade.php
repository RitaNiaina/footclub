
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="<?php echo asset('bootstrap-5.1.3-dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/enregistrer.css')?>" rel="stylesheet" >
</head>
<body>
<nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">

<a class="nav-link" href="<?php echo asset('/Logins')?>">@lang('public.Connexion')</a>

<div class="nav-item dropdown">
<a href="#" class="nav-link dropdown-toggle text-background-chocolate " id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
@lang('public.Langage')
</a>
<div class="dropdown-menu" aria-labeledby="navbarDropdown">
<a href="locale/fr" class="dropdown-item" >Français<i><img src="/img/french.png" width="30px" height="30px" ></i></a>
<a href="locale/en" class="dropdown-item" >English<i><img src="/img/enlish.png" width="30px" height="30px" ></i></a>
</div>
</div>
</nav>

<div class="login">
<form action="/Compter" method="POST">
    @csrf
<img class="img-profile rounded-circle" src='img/logo.png' width="100">
<i><h4>Creer compte</h4></i>
<div class="card-body rounded-bottom bg p-5">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success')}}
    </div>
@endif
<div class="form-group">
<select class=" cnx px-3" name="name"  style="height: 60px;">
@foreach (\App\Models\Membre::all() as $row)
<option value="{{$row->nom_mem}}">{{$row->nom_mem}}</option>
@endforeach
</select>
</div>
<div class="form-group">
<input type="email" name="email" class="form-control cnx p-3" placeholder="@lang('public.Votre email')" required="required" />
</div>
<div class="form-group">

<input type="password"  name="password" class="form-control cnx p-3" placeholder="@lang('public.Mot de passe')" required="required" />
</div>
<div>
<button class="btn btn-dark btn-block cnx py-3" type="submit">@lang('public.Enregistrer')</button>
</div>
</div>
</form>
</div>
<script src="<?php echo asset('assets/vendors/jquery/jquery-3.4.1.js')?>"></script>
<script src="<?php echo asset('assets/vendors/bootstrap/bootstrap.bundle.js')?>"></script>
    
    
    
</body>
</html>
