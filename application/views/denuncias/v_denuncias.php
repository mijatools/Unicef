     <!-- START CONTENT -->
     <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
            <form action="<?=base_url()?>Admin/insertarDenuncia" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col s12 m12 l12">
                <div class="card-panel">
                  <div class="row">
                    <form class="col s12">
                      <h4 class="header2">DATOS DEL DENUNCIANTE</h4>
                      <div class="row">
                        <div class="input-field col s4">
                          <i class="material-icons prefix">person</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Nombre Completo</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">picture_in_picture </i>
                          <input id="icon_password" type="password" class="validate">
                          <label for="icon_password">Carnet De Identidad</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">add_location</i>
                          <input id="icon_password" type="password" class="validate">
                          <label for="icon_password">Ciudad</label>
                        </div>
                        
                      </div>
                      <div class="row">
                    <form class="col s12">
                      
                      <div class="row">
                        <div class="input-field col s4">
                          <i class="material-icons prefix">email</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Correo Electronico</label>
                        </div>
                        <div class="input-field col s4">
                          <i class="material-icons prefix">local_phone</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Telefono/Celular</label>
                        </div>
                        </div>
                        <h4 class="header2">DATOS DE LA PERSONA DENUCIADA</h4>
                        <div class="row">
                        <div class="input-field col s3">
                          <i class="material-icons prefix">person</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Nombre Completo</label>
                        </div>
                        <div class="input-field col s3">
                          <i class="material-icons prefix">add_location </i>
                          <input id="icon_password" type="password" class="validate">
                          <label for="icon_password">Direccion General</label>
                        </div>
                        <div class="input-field col s3">
                          <i class="material-icons prefix">recent_actors</i>
                          <input id="icon_password" type="password" class="validate">
                          <label for="icon_password">Unidad </label>
                        </div>
                        <div class="input-field col s3">
                          <i class="material-icons prefix">supervisor_account</i>
                          <input id="icon_password" type="password" class="validate">
                          <label for="icon_password">Cargo Que Ocupa </label>
                        </div>

                        <div class="container">
                        <h4 class="header2">HECHOS EN LOS QUE SE BASA LA DENUNCIA</h4>
                        <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Textarea</label>
        </div>
      </div>
    </form>
                        </div>

                        </div>

                        <div class="row">
                        <div class="container">
                        <h4 class="header2">DOCUMENTACIÓN ADJUNTA </h4>
                        

                        <form class="col s12">
                        <h7 class="header2">Acompaña pruebas: </h7>
      <div class="row">
        
      <div class="input-field col s4">
                         <label for="Documento"></label><br>
                                <div><select name="level" id="level" class="form-control1" ">
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                        
                                    </select></div>

                                    
                            
                            </div>  
                            <div class="input-field col s4">
                         <label for="Nro de Hoja"></label><br>
                                <div><select name="level" id="level" class="form-control1" ">
                                        <option value="1">SI</option>
                                        <option value="2">NO</option>
                                        
                                    </select></div>
                          
                            </div>

                            <div class="input-field col s4">
                          <i class="material-icons prefix">folder</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Clase Documento</label>
                        </div>
                        </div>


        <div class="input-field col s12">
        
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Otro Tipos De Prueba</label>
        </div>
      </div>
    </form>
                        </div>
                       
                        </div>

                        <input type="submit" name="submit" value="REGISTRAR CONVOCATORIA" class="btn btn-default">
        </div>
        </div>
        </form>

                    </form>
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


      