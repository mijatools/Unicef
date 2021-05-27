
       
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
      <div class="card">
      <div  class="table-responsive">
       <table id="example" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th class="th-sm">Nº
        </th>
        <th class="th-sm">NOMBRE
        </th>
        <th class="th-sm">ENTIDAD
        </th>
        <th class="th-sm">PASSWORD
        </th>
        <th class="th-sm">ADMIN
        </th>
        <th class="th-sm">DateTime
        </th>
        </tr>
        </thead>
        <tbody>
        
        <?php
        $indice=1;
        foreach ($data as $data)  {
        ?>
        <tr>
        
        <td><?php echo $indice; ?></td>
        <td><?php echo $data->username; ?></td>
                <td><?php echo $data->password; ?></td>
                <td><?php echo $data->entidad; ?></td>
        <td><?php echo $data->level; ?></td>
        <td><?php echo $data->fechaRegistro; ?></td>
        
        
        <td> <?php echo form_open_multipart('Admin/EliminarUsuario'); ?>
        <button type="submit" class="btn waves-effect waves-light right red accent-4 " type="button" onclick="return confirm('desea eliminar')"><i class="fas fa-prescription-bottle"></i></button>
        <input type="hidden" name="idusuario" value="<?php echo $data->idusuario; ?>"></input>
        <?php echo form_close(); ?></td>
        <td>
        <a href="<?=base_url()?>home/edit/<?=$data->idusuario?>" class="btn waves-effect waves-light right gradient-45deg-light-blue-cyan " role="button"><i class="fas fa-edit"></i></a>
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
                   <!-- Default form register -->
                 </div>
         </main>
         <!--Main layout-->
      

  
  