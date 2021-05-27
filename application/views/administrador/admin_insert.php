         <!--Main layout-->
         <main class="pt-5 mx-lg-5">
           <div class="container-fluid mt-5">

             <nav class="navbar navbar-expand-lg navbar-dark info-color example z-depth-3">
               <a class="navbar-brand" href="#"><b>INICIO</b></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav">
                   <li class="nav-item active">
                     <a class="nav-link" href="<?php echo base_url(); ?>Admin/RegisterUsuario"> <b>REGISTRAR USUARIO</b> <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>Admin/ListaUsuario"> <b>LISTA DE USUARIO</b></a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url(); ?>./Admin/Centros/Instituciones/"><b>VER CAMBIOS</b></a>
                   </li>

                 </ul>
               </div>
             </nav>

             <br>
             <div class="container">
               <div class="row">
                 <div class="col-sm-3">

                 </div>
                 <div class="col-sm-6">

                   <div class="card">
                     <!-- Default form register -->
                     <form class=" border border-light p-5" action="#!">

                       <p class="h4 mb-4 blue-text"><b>Registrar Usuario</b></p>

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

                       <div class="md-form">
                         <i class="fas fa-user prefix"></i>
                         <input type="text" name="text" class="form-control" value="<?php echo set_value('username') ?>" required>
                         <label for="inputIconEx2">Nombre</label>
                       </div>

                       <div class="md-form">
                         <i class="fas fa-lock prefix"></i>
                         <input type="password" name="password" id="inputIconEx2" class="form-control" value="<?php echo set_value('password') ?>" required>
                         <label for="inputIconEx2">Ingrese Password</label>
                         <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                           Al menos 8 caracteres y 1 dígito
                         </small>
                       </div>

                       <div class="md-form">
                         <i class="fas fa-building prefix"></i>
                         <input type="text" name="text" class="form-control" value="<?php echo set_value('email') ?>" required>
                         <label for="inputIconEx2">Entidad</label>
                       </div>

                       <label for="">Tipo De Administrador</label><br>
                       <div><select name="level" id="level" class="browser-default custom-select" value="<?php echo set_value('level') ?>">
                           <option value="1">Admin</option>
                           <option value="2">Administrador</option>
                           <option value="3">Usuario</option>
                         </select></div>

                       <!-- Sign up button -->
                       <button type="submit" class="btn btn-info my-4 btn-block" name="submit"  >REGISTRAR USUARIO</button>
                       <hr>
                       <?php echo form_close(); ?>
                     </form>
                   </div>
                   <!-- Default form register -->
                 </div>
         </main>
         <!--Main layout-->