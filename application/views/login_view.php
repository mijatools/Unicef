<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

    <div class="container">
  <div class="row">
    <div class="col-sm-3"> 
    </div>

    <div class="col-sm-6">
     <!-- Material form login -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4">
  <strong>INICIAR SESIÓN</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

  <!-- Form -->
  <form class="text-center" action="<?php echo site_url('Login/auth'); ?>" method="POST" class="col s12">
  <div class="view overlay zoom">
  <center><img src="<?=base_url()?>assets/admin/images/avatar/login.png" class="img-fluid " alt="zoom"></center>
  <div class="mask flex-center waves-effect waves-light">
    
  </div>
</div>
  
    <!-- Email -->
    <div class="md-form">
      <input type="text" id="materialLoginFormEmail" class="form-control" name="username" required>
      <label for="materialLoginFormEmail">E-mail</label>
    </div>

    <!-- Password -->
    <div class="md-form">
      <input type="password" id="materialLoginFormPassword" class="form-control"  name="password" required>
      <label for="materialLoginFormPassword">Password</label>
    </div>

    <!-- Sign in button -->
    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">INICIAR SESIÓN</button>

 

    <!-- Social login -->
    <p></p>
    <a type="button" class="btn-floating btn-fb btn-sm">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a type="button" class="btn-floating btn-tw btn-sm">
      <i class="fab fa-twitter"></i>
    </a>
    <a type="button" class="btn-floating btn-li btn-sm">
      <i class="fab fa-linkedin-in"></i>
    </a>
    <a type="button" class="btn-floating btn-git btn-sm">
      <i class="fab fa-github"></i>
    </a>

  </form>
  <!-- Form -->

</div>

</div>
<!-- Material form login -->
    </div>
    
    <div class="col-sm-3">
     
    </div>
  </div>
</div>



    </div>
  </main>
  <!--Main layout-->