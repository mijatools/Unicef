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

    <br>

    <div class="card card-cascade wider reverse">
        <div class="table-responsive">
            <table id="dtMaterialDesignExample" class="table table-striped table-bordered  table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Nº
                        </th>
                        <th class="th-sm"><b>NOMBRE COMPLETO</b>
                        </th>
                        <th class="th-sm"><b>CI</b>
                        </th>
                        <th class="th-sm"><b>CIUDAD</b>
                        </th>
                        <th class="th-sm"><b>CORREO</b>
                        </th>
                        <th class="th-sm"><b>TELEFONO</b>
                        </th>
                        <th class="th-sm"><b>HECHOS DE LA DENUNCIA</b>
                        </th>
                        <th class="th-sm"><b>PRUEBA DOCUMENTOS</b>
                        </th>
                        <th class="th-sm"><b>CANT. HOJAS</b>
                        </th>
                        <th class="th-sm"><b>CLASE DE DOCUMENTO</b>
                        </th>
                        <th class="th-sm"><b>OTRAS PRUEBAS</b>
                        </th>
                        <th class="th-sm"><b>FECHA REGISTRO</b>
                        </th>
                        <th class="th-sm"><b>NOMBRE DENUNCIADO</b>
                        </th>
                        <th class="th-sm"><b>NOMBRE DIRECCION</b>
                        </th>
                        <th class="th-sm"><b>UNIDAD DENUNCIADO</b>
                        </th>
                        <th class="th-sm"><b>CARGO DENUNCIADO</b>
                        </th>
                        <th class="th-sm"><b>TIPO DENUNCIA 1</b>
                        </th>
                        <th class="th-sm"><b>TIPO DENUNCIA 2</b>
                        </th>
                        <th class="th-sm"><b>TIPO DENUNCIA 3</b>
                        </th>
                        <th class="th-sm"><b>ELIMINAR</b>
                        </th>
                        <th class="th-sm"><b>EDITAR</b>
                        </th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $indice = 1;
                    foreach ($data as $data) {
                    ?>
                        <tr>
                            <td><?php echo $indice; ?></td>
                            <td><?php echo $data->nombreCompleto; ?></td>
                            <td><?php echo $data->ci; ?></td>
                            <td><?php echo $data->ciudad; ?></td>
                            <td><?php echo $data->correoElectronico; ?></td>
                            <td><?php echo $data->telefono; ?></td>
                            <td><?php echo $data->hechosDenuncia; ?></td>
                            <td><?php echo $data->pruebasDocumentos; ?></td>
                            <td><?php echo $data->numeroHojas; ?></td>
                            <td><?php echo $data->claseDocumento; ?></td>
                            <td><?php echo $data->otrasPruebas; ?></td>
                            <td><?php echo $data->fechaRegistro; ?></td>
                            <td><?php echo $data->nombreDenunciado; ?></td>
                            <td><?php echo $data->direccionDenunciado; ?></td>
                            <td><?php echo $data->unidadDenunciado; ?></td>
                            <td><?php echo $data->cargoDenunciado; ?></td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;"><?php echo $data->denunciaPasoUno; ?></td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;"><?php echo $data->denunciaPasoDos; ?></td>
                            <td style="white-space: nowrap; text-overflow:ellipsis; overflow: hidden; max-width:1px;"><?php echo $data->denunciaPasoTres; ?></td>

                            <td> <?php echo form_open_multipart('Admin/EliminarDenuncia'); ?>
                                <button type="submit" class="btn btn-danger px-3" type="button" onclick="return confirm('desea eliminar')"><i class="fa fa-trash"></i></button>
                                <input type="hidden" name="idformularioDenuncia" value="<?php echo $data->idformularioDenuncia; ?>"></input>
                                <?php echo form_close(); ?>
                            </td>
                            <td>
                                <a href="<?= base_url() ?>Admin/editarDenuncia/<?= $data->idformularioDenuncia ?>" class="btn btn-warning   px-3" role="button"><i class="fas fa-edit"></i></a>
                            </td>
                        </tr>
                    <?php
                        $indice++;
                    }
                    ?>
                </tbody>
                <tfoot class="text-primary">
                    <tr>
                        <th class="th-sm">Nº
                        </th>
                        <th class="th-sm"><b>NOMBRE COMPLETO</b>
                        </th>
                        <th class="th-sm"><b>CI</b>
                        </th>
                        <th class="th-sm"><b>CIUDAD</b>
                        </th>
                        <th class="th-sm"><b>CORREO</b>
                        </th>
                        <th class="th-sm"><b>TELEFONO</b>
                        </th>
                        <th class="th-sm"><b>HECHOS DE LA DENUNCIA</b>
                        </th>
                        <th class="th-sm"><b>PRUEBA DOCUMENTOS</b>
                        </th>
                        <th class="th-sm"><b>CANT. HOJAS</b>
                        </th>
                        <th class="th-sm"><b>CLASE DE DOCUMENTO</b>
                        </th>
                        <th class="th-sm"><b>OTRAS PRUEBAS</b>
                        </th>
                        <th class="th-sm"><b>FECHA REGISTRO</b>
                        </th>
                        <th class="th-sm"><b>NOMBRE DENUNCIADO</b>
                        </th>
                        <th class="th-sm"><b>NOMBRE DIRECCION</b>
                        </th>
                        <th class="th-sm"><b>UNIDAD DENUNCIADO</b>
                        </th>
                        <th class="th-sm"><b>CARGO DENUNCIADO</b>
                        </th>
                        <th class="th-sm"><b>TIPO DENUNCIA 1</b>
                        </th>
                        <th class="th-sm"><b>TIPO DENUNCIA 2</b>
                        </th>
                        <th class="th-sm"><b>TIPO DENUNCIA 3</b>
                        </th>
                        <th class="th-sm"><b>ELIMINAR</b>
                        </th>
                        <th class="th-sm"><b>EDITAR</b>
                        </th>

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="presentation">Mouse aquí<i class="fa fa-arrow-right" aria-hidden="true"></i></div>

<nav class="float-action-button">
  <a href="<?php echo base_url(); ?>Admin/listaDenuncia" class="buttons" title="Crear Denuncia" data-toggle="tooltip" data-placement="left">
          <i class="fa fa-edit fa-xs"></i>
        </a>
  <a href="#" class="buttons" title="Ver Denuncia" data-toggle="tooltip" data-placement="left">
          <i class="fa fa-book-open fa-xs"></i>
        </a>
  <a href="#" class="buttons" title="Eliminar Denuncia" data-toggle="tooltip" data-placement="left">
          <i class="fa fa-trash-alt fa-xs"></i>
        </a>
  <a href="#" class="buttons main-button" title="Seleccione una acción"  data-toggle="tooltip" data-placement="left">
          <i class="fa fa-times fa-xs"></i>
          <i class="fa fa-plus-circle fa-xs"></i>
        </a>
</nav>
</div>
</main>
<!--Main layout-->

<br>
<br>
<br>