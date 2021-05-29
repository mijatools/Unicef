  
    <style>
    /*estilos para la tabla*/
    table th {
        /* COLOR A NUESTRO MENU DE LA TABLA */
        background: rgb(34, 193, 195);
        background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(85, 226, 249, 1) 100%);
        color: white;
    }

    table>tbody>tr>td {
        /* DAR COLOR AL TEXTO TABLE */
        vertical-align: middle !important;
        color: rgb(34, 193, 195);
    }

    .table-hover tbody tr:hover td,
    .table-hover tbody tr:hover th {
        color: #006D6F;

        background: rgb(61, 241, 255);
        background: linear-gradient(0deg, rgba(61, 241, 255, 0.2721288344439339) 0%, rgba(85, 249, 231, 0.6838935403262867) 100%);
    }

    h1 {
        box-sizing: content-box;
        width: 50%;
        padding: 5px;

        border-radius: 55px;
        background: rgb(61, 241, 255);
        background: linear-gradient(0deg, rgba(61, 241, 255, 0.2721288344439339) 0%, rgba(85, 249, 231, 0.6838935403262867) 100%);

        margin: auto;
        color: #08aef0;
    }

    /* pagination mdbootrap */
    .pagination .page-item.active .page-link {
        background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(85, 226, 249, 1) 100%);
    }

    div.dataTables_wrapper div.dataTables_paginate ul.pagination .page-item.active .page-link:focus {
        background-color: #55E2F9;
    }

    .pagination .page-item.active .page-link:hover {
        background-color: #55E2F9;
    }
</style>


 
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
      <div class="card card-cascade wider reverse">
        <div class="table-responsive">
        <table id="dtMaterialDesignExample" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
        
            <thead>
              <tr>
                <th class="th-sm"><b>Nº</b></th>
                <th class="th-sm"><b>NOMBRE</b></th>
                <th class="th-sm"><b>ENTIDAD</b></th>
                <th class="th-sm"><b>PASSWORD</b></th>
                <th class="th-sm"><b>ADMIN</b></th>
                <th class="th-sm"><b>FECHA</b></th>
                <th class="th-sm"><b>EDITAR</b></th>
                <th class="th-sm"><b>ELIMINAR</b></th>
              </tr>
            </thead>
            <tbody>

              <?php
              $indice = 1;
              foreach ($data as $data) {
              ?>
                <tr>
                  <td><?php echo $indice; ?></td>
                  <td><?php echo $data->username; ?></td>
                  <td><?php echo $data->password; ?></td>
                  <td><?php echo $data->entidad; ?></td>
                  <td><?php echo $data->level; ?></td>
                  <td><?php echo $data->fechaRegistro; ?></td>
                  <td> <?php echo form_open_multipart('Admin/EliminarUsuario'); ?>
                    <button type="submit" class="btn btn-danger px-3 " type="button" onclick="return confirm('desea eliminar')"><i class="fa fa-trash"></i></button>
                    <input type="hidden" name="idusuario" value="<?php echo $data->idusuario; ?>"></input>
                    <?php echo form_close(); ?>
                  </td>
                  <td>
                    <a href="<?= base_url() ?>home/edit/<?= $data->idusuario ?>" class="btn btn-warning   px-3" role="button"><i class="fas fa-edit"></i></a>
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