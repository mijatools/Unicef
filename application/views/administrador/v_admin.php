<!-- START CONTENT -->
<section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
			<br>
            <div class="container-fluid">
           <div id="tabs" class="tabs">
           <nav class="light-blue lighten-2">
    <ul>
          <li><a href="<?php echo base_url(); ?>./Admin/Centros/"> <b>INICIO</b></a></li>
            <li><a href="<?php echo base_url(); ?>Admin/RegisterUsuario"> <b>REGISTRAR USUARIO</b></a></li>
            <li><a href="<?php echo base_url(); ?>Admin/ListaUsuario"> <b>LISTA DE USUARIO</b></a></li>
            <li><a href="<?php echo base_url(); ?>./Admin/Centros/Instituciones/"><b>VER CAMBIOS</b></a></li>
    </ul>
  </nav>  
  </div>
  
       
  <div class="row">
    <div class="col s12 m12">
      <div class="card-panel blue lighten-5">
      <div class="container">
       <table id="example" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th class="th-sm">NOMBRE
        </th>
        <th class="th-sm">CORREO
        </th>
        <th class="th-sm">PASSWORD
        </th>
        <th class="th-sm">ADMIN
        </th>
        </tr>
        </thead>
        <tbody>
        
        <?php
        $indice=1;
        foreach ($data as $data)  {
        ?>
        <tr>
        
        
        <td><?php echo $data->username; ?></td>
        <td><?php echo $data->email; ?></td>
        <td><?php echo $data->password; ?></td>
        <td><?php echo $data->level; ?></td>
        
        
        <td> <?php echo form_open_multipart('Admin/EliminarUsuario'); ?>
        <button type="submit" class="btn waves-effect waves-light right red accent-4 " type="button" onclick="return confirm('desea eliminar')"><i class="material-icons left">delete</i></button>
        <input type="hidden" name="id_usuario" value="<?php echo $data->id_usuario; ?>"></input>
        <?php echo form_close(); ?></td>
        <td>
        <a href="<?=base_url()?>home/edit/<?=$data->id_usuario?>" class="btn waves-effect waves-light right gradient-45deg-light-blue-cyan " role="button"><i class="material-icons left">edit</i></a>
        </td>
        </tr>
        <?php
        $indice++;
        }
        ?>
        </tbody>
        
        </table>
       </div>

      </div>
    </div>
  </div>
            
        
      

  
  
            </div>
           </div>

           </div>
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->