<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UNIFEC </title>
   <!-- Favicons-->
  <link rel="icon" href="<?=base_url()?>assets/admin/images/favicon/logo1.png" sizes="32x32">
    <!-- Favicons-->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?=base_url()?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?=base_url()?>assets/admin/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?=base_url()?>assets/admin/css/style.min.css" rel="stylesheet">

</head>

<style>
@media handheld, only screen and (min-width: 767px) {
.ls-container {
display:none;
}
}

@media only screen and (min-width: 1023px) {
.ls-container {
display:none;
}
}
</style>

 <!--Main Navigation-->
 <header>

 <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light  light-blue scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="white-text"><b>UNICEF</b></strong>
        </a>

        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Buscar...' style="min-width: 555px" />
          
        </form>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->         
          <ul class="navbar-nav mr-auto">
          <div class="ls-container"> 
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About
                MDB</a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                target="_blank">Free
                download</a>
            </li>
            </div>
          </ul>
          

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
          <div class="collapse navbar-collapse" id="navbarSupportedContent-5">      
       <ul class="navbar-nav ml-auto nav-flex-icons">
         <li class="nav-item avatar dropdown">
           <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
             <span class="badge badge-danger ml-2">4</span>
             <i class="fas fa-bell"></i>
           </a>
           <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-5">
             <a class="dropdown-item waves-effect waves-light" href="#">Action <span class="badge badge-danger ml-2">4</span></a>
           </div>
         </li>
       </ul>
     </div> 
          <li class="nav-item avatar dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg"  class="rounded-circle z-depth-0"
            alt="avatar image" height="30px">
        </a>
        <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
          aria-labelledby="navbarDropdownMenuLink-55">
          <a class="dropdown-item"  href="<?=base_url()?>Login/"><i class="fas fa-user mr-3"></i>Login</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>           
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar -->


<!-- Sidebar -->
<div class="sidebar-fixed position-fixed">

<div class="container">
       <center> <img src="<?=base_url()?>assets/admin/images/avatar/logo.gif" class="img-fluid" alt="" height="500"></center>
       </div>

  <div class="list-group list-group-flush">
    <a href="#" class="list-group-item active waves-effect">
      
    </a>
    <a href="<?=base_url()?>Admin/denuncias" class="list-group-item list-group-item-action waves-effect">
      <i class="fas fa-user mr-3"></i>DENUNCIADO</a>
    <a href="#" class="list-group-item list-group-item-action waves-effect">
      <i class="fas fa-table mr-3"></i>Tables</a>
    <a href="#" class="list-group-item list-group-item-action waves-effect">
      <i class="fas fa-map mr-3"></i>Maps</a>
    <a href="#" class="list-group-item list-group-item-action waves-effect">
      <i class="fas fa-money-bill-alt mr-3"></i>Orders</a>
  </div>

</div>
<!-- Sidebar -->

</header>
<!--Main Navigation-->
