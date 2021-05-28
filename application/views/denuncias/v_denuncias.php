 <!--Main layout-->
 <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/css/bootstrap-select.css" />


 <main class="pt-5 mx-lg-5">

   <div class="container-fluid mt-5">

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
                        echo form_open(base_url('Admin/insertarDenuncia'), 'class="form-horizontal" entype="multipart/formdata"');
                        ?>

     <div class="row">

       <div class="col-sm-12">

         <ul class="list-group">
           <li class="list-group-item active"><b>TIPOS DE DENUNCIAS </b></li>
           <li class="list-group-item ">
             <div class="row">
               <div class="col">
                 <div class="row-fluid">
                   <select class="selectpicker" data-show-subtext="true" data-live-search="true"  name="uno"  value="<?php echo set_value('uno') ?>" required>
                     <option>DEFENSA Y RESTITUCIÓN DE DERECHOS DE LA NIÑA NIÑO Y ADOLESCENTE (NNA) </option>
                     <option>INTERVENCIÓN Y ORIENTACIÓN</option>
                     <option>DELITOS COMETIDOS CONTRA NIÑAS, NIÑOS Y ADOLESCENTES</option>
                   </select>
                 </div>
               </div>
               <div class="col">
                 <div class="row-fluid">
                   <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="dos"  value="<?php echo set_value('dos') ?>" required>
                     <option>1. DERECHO A LA PROTECCIÓN DE LA FAMILIA</option>
                     <option>2. DERECHO A LA IDENTIDAD</option>
                     <option>3. DERECHO A LA INTEGRIDAD PERSONAL Y PROTECCIÓN CONTRA LA VIOLENCIA</option>
                     <option>4. PROTECCIÓN DE NNA CON RELACIÓN AL TRABAJO</option>
                     <option>5. DERECHO A LA EDUCACIÓN</option>
                     <option>6. DERECHO A LA SALUD</option>
                     <option>7. DERECHO AL DEBIDO PROCESO</option>
                     <option>8. DERECHO A OPINAR, PARTICIPAR Y PEDIR</option>
                     <option>9. DERECHOS Y GARANTÍAS DE LA NIÑA, NIÑO Y ADOLESCENTE CON MADREO PADRE PRIVADOS DE LIBERTAD</option>
                     <option>10. DERECHOS DE LAS NIÑAS, NIÑOS Y ADOLESCENTES EN SITUACIÓN DE DISCAPACIDAD</option>
                     <option>11. DERECHO A RECREACIÓN, ESPARCI- MIENTO, DEPORTE Y JUEGO</option>
                   </select>
                 </div>
               </div>
               <div class="col">
                 <div class="row-fluid">
                   <select class="selectpicker" data-show-subtext="true" data-live-search="true" name="tres"  value="<?php echo set_value('tres') ?>" required>
                     <option value="Art. 109. CÓDIGO DE LAS FAMILIAS Y PROCEDIMIENTO FAMILIAR (CONTENIDO Y EXTENSIÓN DE LA ASISTENCIA FAMILIAR) I. La asistencia familiar es un derecho y una obligación de las familias y comprende los recursos que garantizan lo indispensable para la alimentación, salud, educación, vivienda, recreación y vestimenta; surge ante la necesidad manifiesta de los miembros de las familias y el incumpli- miento de quien debe otorgarla conforme a sus posibilidades y es exigible judicialmente cuando no se la presta voluntariamente; se priorizará el interés superior de niñas, niños y adolescentes. II.	La asistencia familiar se otorga hasta cumplida la mayoría de edad, y podrá extenderse hasta que la o el beneficiario cumpla los veinticinco (25) años, a fin de procurar su formación técnica o profesional o el aprendizaje de un arte u oficio, siempre y cuando la dedicación a su formación evidencie resultados efectivos. III.	Asimismo, garantizará la recreación cuando se trate de niñas, niños y adolescentes, de personas en situación de discapacidad y de personas adultas mayores. Art. 41. CNNA (DEBERES DE LA MADRE Y DEL PADRE). La madre y el padre tienen responsabilidades y obligaciones comunes e iguales para brindar afecto, alimentación, sustento, guarda, protección, salud, educación, respeto y a participar y apoyar en la implementación de las políticas del Estado, para garantizar el ejercicio de los derechos de sus hijas e hijos conforme a lo dispuesto por este Código y la normativa en materia de familia. [Concordancia: Convención sobre los Derechos del Niño: Art. 18 numeral 1 y Art. 27 numeral 2]. Art. 188. CNNA (ATRIBUCIONES). Son atribuciones de la Defensoría de la Niñez y Adolescencia las siguientes: m. Promover acuerdos de asistencia familiar para su homologación, de oficio por autoridad competente." class="info-color">1.1 Asistencia familiar </option>
                     <option value="1" class="blue lighten-5">1.2 Conflicto de guarda</option>
                     <option value="1" class="blue lighten-5">1.3 Abandono de niña, niño o adolescente</option>
                     <option value="1" class="blue lighten-5">1.5 Extravío</option>
                     <option value="1" class="blue lighten-5">1.5 Imposibilidad de deberes por causa ajena</option>
                     <option value="1" class="blue lighten-5">1.6 Orfandad absolutan</option>
                     <option value="1" class="blue lighten-5">1.7 Filiación judicial</option>
                     <option value="1" class="blue lighten-5">1.8 Violencia física</option>
                   </select>
                 </div>
               </div>
             </div>
           </li>
         </ul><br>


         <ul class="list-group">
           <li class="list-group-item active"><b>DATOS DEL DENUNCIANTE</b></li>
           <li class="list-group-item  cyan lighten-5">
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="Nombre Y Apellido" name="nombreCompleto"  value="<?php echo set_value('nombreCompleto') ?>" required>
               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder=" Ingrese CI"  name="ci"  value="<?php echo set_value('ci') ?>" required>
               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder="Ingrese Ciudad"  name="ciudad"  value="<?php echo set_value('ciudad') ?>" required>
               </div>
             </div>
             <br>
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="Ingrese Correo Electronico"  name="correoElectronico"  value="<?php echo set_value('correoElectronico') ?>" required>
               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder=" Ingrese Telefono"  name="telefono"  value="<?php echo set_value('telefono') ?>" required>
               </div>
             </div>
           </li>
         </ul><br>

         <ul class="list-group">
           <li class="list-group-item active py-1"><b>DATOS DE LA PERSONA DENUNCIADA</b></li>
           <li class="list-group-item  cyan lighten-5">
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="Nombre Y Apellido"  name="nombreDenunciado"  value="<?php echo set_value('nombreDenunciado') ?>" required>
               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder="Dirección General"  name="direccionDenunciado"  value="<?php echo set_value('direccionDenunciado') ?>" required>
               </div>
             </div><br>
             <div class="row">
               <div class="col">
                 <input type="text" class="form-control" placeholder="Unidad"  name="unidadDenunciado"  value="<?php echo set_value('unidadDenunciado') ?>" required>
               </div>
               <div class="col">
                 <input type="text" class="form-control" placeholder="Cargo Que Ocupa"  name="cargoDenunciado"  value="<?php echo set_value('cargoDenunciado') ?>" required>
               </div>
             </div>
           </li>
         </ul>

         <br>
         <ul class="list-group">
           <li class="list-group-item active py-1"><b>HECHOS EN LOS QUE BASA LA DENUNCIA</b></li>
           <li class="list-group-item light-blue lighten-5">
             <div class="row">
             <div class="col">
               <div class="form-group">
               <textarea class="form-control" id="exampleFormControlTextarea5" cols="123"  name="hechosDenuncia"  value="<?php echo set_value('hechosDenuncia') ?>" required></textarea>
                             </div>
               </div>
             </div>
           </li>
         </ul><br>

         <ul class="list-group">
           <li class="list-group-item active py-1"><b>DATOS DE LA PERSONA DENUNCIADA</b></li>
           <li class="list-group-item light-blue lighten-5">
             <div class="row">
               <div class="col">
                 <select class="browser-default custom-select">
                   <option selected  name="pruebasDocumentos"  value="<?php echo set_value('pruebasDocumentos') ?>" required >Documento</option>
                   <option value="Si">Si</option>
                   <option value="No">No</option>
                 </select>
               </div>
               <div class="col">
                 <input type="number" class="form-control" placeholder="Numero de Hojas">
               </div>
               <div class="col">
                 <select class="browser-default custom-select">
                   <option selected  name="claseDocumentos"  value="<?php echo set_value('claseDocumentos') ?>" required>Clase De Documento</option>
                   <option value="1">One</option>
                   <option value="2">Two</option>
                   <option value="3">Three</option>
                 </select>
               </div>
               <div class="col">
                 <input type="date" class="form-control" placeholder="Unidad"  name="numeroHojas"  value="<?php echo set_value('numeroHojas') ?>" required>
               </div>
             </div><br>
             <div class="row">
               <div class="col">
                 <div class="form-group green-border-focus">
                 <textarea class="form-control" id="exampleFormControlTextarea5" cols="123"  name="otrasPruebas"  value="<?php echo set_value('otrasPruebas') ?>" required></textarea>
                 </div>
               </div>
             </div>
           </li>
         </ul>


         <button type="submit" class="btn btn-info btn-lg btn-block"><b>REGISTRAR</b></button>
         <?php echo form_close(); ?>
       </div>

     </div>
   </div>
   <br><br><br>


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.3/js/bootstrap-select.js"></script>


 </main>
 <!--Main layout-->