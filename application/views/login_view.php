
	     <!-- START CONTENT -->
		 <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">

			<br>
			<div class="container">
			<div class="row">
			<div class="col col s3 m3 l3">
			</div>
			<div class="col col s6 m6 l6">
			<div class="card-panel">
                    <h3 class="header2"><center>
					<img src="<?=base_url()?>assets/admin/images/gallary/d.png" alt="">
					</center></h3>
                    <div class="row">
					<form action="<?php echo site_url('Login/auth'); ?>" method="POST" class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name4" type="text" class="validate" name="username" placeholder="Ingrese su cuenta" required>							
                            <label for="first_name">Nombre</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input id="password5" type="password" class="validate" name="password" placeholder="ingrese su contraseña" required>
                            <label for="password">Contraseña</label>
                          </div>
                        </div>      
                          <div class="row">
                            <div class="input-field col s12">
                              <button class="btn waves-effect waves-light gradient-45deg-light-blue-cyan right" type="submit" name="action">Iniciar Sesión
                                <i class="material-icons right">send</i>
                              </button>
                            </div>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
			</div>
			<div class="col col s3 m3 l3">
			</div>
			</div>
			</div>
			
                  
              








	</div>
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
