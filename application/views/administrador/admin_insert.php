    <!-- START CONTENT -->
    <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
			<br>
            <div class="container-fluid">
           <div id="tabs" class="tabs">
           <nav class="light-blue accent-1">
    <ul>
          <li><a href="<?php echo base_url(); ?>./Admin/Centros/"> <b>INICIO</b></a></li>
            <li><a href="<?php echo base_url(); ?>Admin/RegisterUsuario"> <b>REGISTRAR USUARIO</b></a></li>
            <li><a href="<?php echo base_url(); ?>Admin/ListaUsuario"> <b>LISTA DE USUARIO</b></a></li>
            <li><a href="<?php echo base_url(); ?>./Admin/Centros/Instituciones/"><b>VER CAMBIOS</b></a></li>
    </ul>
  </nav>      
            </div>
           </div>


           <div class="container">
           <div class="row">
              <div class="col col s3 m3 l3">
                  </div>

                  <div class="col col s6 m6 l6"><br>
                    
                  <?php
                    //NOTIFIACIONES ERROR
                    echo validation_errors('<div class="alert alert-warnig">', '</div>');

                    //notificacion del login
                    if ($this->session->flashdata('sukses')) {
                        echo '<div class="msg msg-info z-depth-3">';
                        echo $this->session->flashdata('sukses');
                        echo '</div>';
                    }
                    // cambiamo la direccion de base url por login   admin/inputsekolah
                    echo form_open(base_url('Admin/insertdata'), 'class="form-horizontal" entype="multipart/formdata"');
                    ?>


            
                  <div class="card-panel">
                    <h4 class="header2"><center>Registrar Usuarios</center></h4>
                    <div class="row">
                      <form class="col s12">
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="username" class="form-control" placeholder="Ingrese Su Nombre" value="<?php echo set_value('username') ?>" required>
                            <label for="first_name">Nombre</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input type="text" name="email" class="form-control" placeholder="Ingrese Su Email" value="<?php echo set_value('email') ?>" required>
                            <label for="email">Email</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <i class="material-icons prefix">lock_outline</i>
                            <input type="text" name="password" class="form-control" placeholder="Ingrese su password" value="<?php echo set_value('password') ?>" required>
                            <label for="password">Password</label>
                          </div>
                        </div>   
                        
                        <div class="container">
                        <div class="container">
                        <div class="container">
                        <div class="container">
                        <div class="row">
                          <div class="input-field col s6">
                         <label for="">Tipo De Administrador</label><br>
                                <div><select name="level" id="level" class="form-control1" value="<?php echo set_value('level') ?>">
                                        <option value="1">Admin</option>
                                        <option value="2">Administrador</option>
                                        <option value="3">Usuario</option>
                                    </select></div>

                                    
                            
                            </div>
                            </div>
                            </div>

                            
                        </div>
                        <button class="btn waves-effect waves-light right gradient-45deg-cyan-cyan" type="submit" name="action">REGISTRAR
                                <i class="material-icons right">send</i>
                              </button> 
                        </div>

                        
                          
                             
                           
                        </div>
                      </form>
                    </div>
                  </div>
                
              </div>
            </div>

                   

                    
                    <?php echo form_close(); ?>


                    
          
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
